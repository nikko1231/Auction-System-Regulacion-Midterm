<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('make')->get();

        return inertia('Car/Car', [
            'cars' => $cars
        ]);
    }
}
