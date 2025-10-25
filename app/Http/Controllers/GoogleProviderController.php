<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SocialProvider;
use App\Models\User;
use App\Models\UserToken;
// libs
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use App\Services\User\CreateUserService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class GoogleProviderController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->scopes([
            'openid',
            'profile',
            'email',
            'https://www.googleapis.com/auth/calendar',
            'https://www.googleapis.com/auth/calendar.events'
        ])->with([
            'access_type' => 'offline',
            'prompt' => 'consent select_account', // force consent screen each time
        ])->redirect();
    }

    public function callback()
    {
        try {
            if (Auth::check()) {
                Auth::logout();
            }

            /** @var \Laravel\Socialite\Two\User $data */
            $data = Socialite::driver('google')->user();
        
            $provider = SocialProvider::where('name', 'google')->firstOrFail();
            $raw = $data->getRaw();

            $user = User::where('email', $data->getEmail())->first();

            if (!$user) {
                $user = DB::transaction(function () use ($data, $provider, $raw) {
                    $user = new User();

                    $user->first_name = $raw['given_name'];
                    $user->last_name = $raw['family_name'];
                    $user->email = $data->getEmail();
                    $user->avatar_url = $data->getAvatar();
                    $user->password = Hash::make(uniqid());
                    $user->save();
        
                    $user_token = new UserToken();
                    $user_token->provider_id = $provider->id;
                    $user_token->provider_user_id = $data->getId();
                    $user_token->access_token = $data->token;
                    $user_token->refresh_token = $data->refreshToken;
                    $user_token->expires_at = now()->addSeconds($data->expiresIn);
                    $user_token->scopes_approved = json_encode($data->approvedScopes);
                    $user->user_tokens()->save($user_token);
        
                    return $user;
                });
            }
    
            Auth::login($user);
            return redirect()->route('dashboard.private.index')->with('success', 'Logged in successfully!');
        } catch (Throwable $th) {
            dd($th);
        }
    }
}
