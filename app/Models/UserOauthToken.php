<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOauthToken extends Model
{
    /** @use HasFactory<\Database\Factories\UserOauthTokenFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider',
        'provider_token',
    ];
}
