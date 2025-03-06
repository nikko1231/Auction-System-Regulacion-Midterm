<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class BidderFactory extends Factory
{

    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
