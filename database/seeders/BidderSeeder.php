<?php

namespace Database\Seeders;

use App\Models\Bidder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bidder::factory(50)->create();
    }
}
