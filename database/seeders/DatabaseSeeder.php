<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {//Aquí se registran todos los seeders que se creen
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(car_datesSeeder::class);
    }
}
