<?php

namespace Database\Factories;

use App\Models\car_dates;
use Illuminate\Database\Eloquent\Factories\Factory;

class car_datesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = car_dates::class;//Nombre del modelo

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {//Mediante la libreria PHP faker se generan los datos falsos.
        return [
            'Name'=> $this->faker->randomElement(['Audi s3','Honda civic', 'Opel vectra','Nissan GT-R','Ford Fiesta ST','Volkswagen Scirocco', 'Tesla Model 3','Chevrolet Camaro','Abarth 124 Spider']),
            'user_id' => '1',
            'img'=> $this->faker->randomElement(['noImg.jpeg']),
            'Transmission_type'=> $this->faker->randomElement(['Manual','Automatic','5-speed manual','6-speed manual','Attached dual-clutch']),
            'Year'=> $this->faker->numberBetween(1990, 2022),
            'Price'=> $this->faker->numberBetween(5000, 50000),
            'Bodywork'=> $this->faker->randomElement(['Coupé','Roadster','Sedan','4x4 SUV','MPV','5-door SUV','Berlina','Hatchback']),
            'Fuel_type'=> $this->faker->randomElement(['Gasoline','Diesel','Electricity','Natural gas','GLP']),
            'Mileage'=> $this->faker->numberBetween(0, 100000),
        ];
    }
}
