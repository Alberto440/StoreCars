<?php

namespace App\Http\Controllers\Cars;

use App\Models\car_dates;
use App\Http\Controllers\Controller;


class SpecificViewCarController extends Controller
{
    public function show(car_dates $car)//$car es el objeto que pasas por url
    {
        return view('car.SpecificCar', compact('car'));
    }
}
