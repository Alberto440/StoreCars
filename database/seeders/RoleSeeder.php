<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin User']);
        $role->permissions()->attach([1,2,3,4,5,6,7]);


        $role = Role::create(['name' => 'Normal User' ]);
        $role->syncPermissions(['Buy-Sell Cars','View Profile','Favorites View','Upload a car']);
    }
}
