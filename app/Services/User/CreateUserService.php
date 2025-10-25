<?php

namespace App\Services\User;

use Laravel\Socialite\Two\User as GoogleUser;

use App\Models\SocialProvider;
use App\Models\User;
use App\Models\UserToken;
use Illuminate\Support\Facades\DB;

class CreateUserService 
{
    /**
     * Handle create user
     * 
     * @param GoogleUser $data
     * @return User
     * @throws \Throwable
     */
    public function handle(GoogleUser $data): User
    {
        $provider = SocialProvider::where('name', 'google')->firstOrFail();
        $raw = $data->getRaw();

        return DB::transaction(function () use ($data, $provider, $raw) {
            $user = new User();

            dd($raw);
            $user->first_name = $raw['given_name'];
            $user->last_name = $raw['family_name'];
            $user->email = $data->getEmail();
            $user->avatar_url = $data->getAvatar();
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
}
