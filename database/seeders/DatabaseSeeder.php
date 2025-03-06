<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::firstOrCreate(
            ['email' => 'test@example.com'], // Check if email exists
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Ensure password is hashed
                'email_verified_at' => now(),
            ]
        );
        

        $this->call([
            CarSeeder::class,
            BidderSeeder::class,
            CarBidderSeeder::class,
        ]);
    }
}
