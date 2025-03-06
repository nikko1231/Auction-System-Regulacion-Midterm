<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'make' => $this->faker->company,
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'miles' => $this->faker->numberBetween(10000, 200000),
        ];
    }
}
