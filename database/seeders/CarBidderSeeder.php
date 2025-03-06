<?php

namespace Database\Seeders;

use App\Models\Bidder;
use App\Models\Car;
use App\Models\CarBidder;
use Illuminate\Database\Seeder;

class CarBidderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $biddersId = Bidder::all()->pluck('id')->toArray();
        $carsId = Car::all()->pluck('id')->toArray();


        foreach ($biddersId as $id)
        {
            CarBidder::create([

                'car_id' => $carsId[array_rand($carsId)],
                'bidder_id' => $id,
            ]);
        }
    }
}
