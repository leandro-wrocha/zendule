<?php

namespace Database\Seeders;

use App\Models\Provider;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Providers extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provider::factory()->create(['name' => 'google', 'provider_key' => null]);
    }
}
