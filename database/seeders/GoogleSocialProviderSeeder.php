<?php

namespace Database\Seeders;

use App\Models\SocialProvider;
use Illuminate\Database\Seeder;

class GoogleSocialProvider extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialProvider::create([
            'name' => 'google',
            'is_enabled' => true,
        ]);
    }
}
