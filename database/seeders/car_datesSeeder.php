<?php

namespace Database\Seeders;

use App\Models\car_dates;
use Illuminate\Database\Seeder;

class car_datesSeeder extends Seeder//Cada seeder que se cree, se tiene que registrar en DatabaseSeeder.php
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        car_dates::factory(36)->create();//Numero de objetos que quiero crear
        //Creacion de objetos escritos a mano con la misma finalidad
        $car = car_dates::create([
            'Name'=>'Bugatti Veyron',
            'user_id' => '2',
            'img'=>'1.jpeg',  
            'Transmission_type' => 'Attached dual-clutch',
            'Year' => '2011',
            'Price' => '1280000',
            'Bodywork' => 'Deportive',
            'Fuel_type' => 'Gasoline',
            'Mileage' =>'23314' 
        ]);

        $car = car_dates::create([
            'Name'=>'Ferrari F40',
            'user_id' => '2',
            'img'=>'ferrari.jpeg',  
            'Transmission_type' => 'Manual',
            'Year' => '1987',
            'Price' => '123123',
            'Bodywork' => 'Coupé',
            'Fuel_type' => 'Gasoline',
            'Mileage' =>'500' 
        ]); 
        
        $car = car_dates::create([
            'Name'=>'Porsche 911 GT3',
            'user_id' => '2',
            'img'=>'911.jpeg',  
            'Transmission_type' => '8-speed longitudinal',
            'Year' => '1999',
            'Price' => '201768',
            'Bodywork' => '2-door coupé',
            'Fuel_type' => 'Gasoline',
            'Mileage' =>'30000' 
        ]); 

        $car = car_dates::create([
            'Name'=>'Renault Twingo',
            'user_id' => '2',
            'img'=>'rena.jpeg',  
            'Transmission_type' => '5-speed manual',
            'Year' => '2020',
            'Price' => '22750',
            'Bodywork' => '5-door SUV',
            'Fuel_type' => 'Petrol',
            'Mileage' =>'50' 
        ]); 

        $car = car_dates::create([
            'Name'=>'Toyota Rav4',
            'user_id' => '2',
            'img'=>'rav4.jpeg',  
            'Transmission_type' => '5-speed manual',
            'Year' => '2020',
            'Price' => '22750',
            'Bodywork' => 'CVT',
            'Fuel_type' => 'Hybrid',
            'Mileage' =>'5620' 
        ]); 

        $car = car_dates::create([
            'Name'=>'Lamborghini urus',
            'user_id' => '2',
            'img'=>'urus.jpeg',  
            'Transmission_type' => '8-speed longitudinal',
            'Year' => '2018',
            'Price' => '232715',
            'Bodywork' => '5-door SUV',
            'Fuel_type' => 'Petrol',
            'Mileage' =>'11100' 
        ]); 

        $car = car_dates::create([
            'Name'=>'Kia Stinger',
            'user_id' => '2',
            'img'=>'kia.jpeg',  
            'Transmission_type' => '8-speed longitudinal',
            'Year' => '2017',
            'Price' => '58700',
            'Bodywork' => '5-door SUV',
            'Fuel_type' => 'Petrol',
            'Mileage' =>'800' 
        ]); 

        $car = car_dates::create([
            'Name'=>'Mercedes-Benz Clase C',
            'user_id' => '2',
            'img'=>'mercedes.jpeg',  
            'Transmission_type' => 'Automatic',
            'Year' => '2014',
            'Price' => '71370',
            'Bodywork' => 'Berlina',
            'Fuel_type' => 'Gasoline',
            'Mileage' =>'31700' 
        ]); 

        $car = car_dates::create([
            'Name'=>'Infinity Q30',
            'user_id' => '2',
            'img'=>'infi.jpeg',  
            'Transmission_type' => '6-speed manual',
            'Year' => '2019',
            'Price' => '30900',
            'Bodywork' => 'Hatchback',
            'Fuel_type' => 'Petrol',
            'Mileage' =>'3100' 
        ]); 
    }}
