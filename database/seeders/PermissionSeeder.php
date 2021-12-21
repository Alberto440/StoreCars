<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'View Dashboard'
        ]);
        Permission::create([
            'name' => 'Buy-Sell Cars'
        ]);
        Permission::create([
            'name' => 'View Profile'
        ]);
        Permission::create([
            'name' => 'View Role List'
        ]);
        Permission::create([
            'name' => 'CRUD Edit'
        ]);
        Permission::create([
            'name' => 'Favorites View'
        ]);
        Permission::create([
            'name' => 'Upload a car'
        ]);
    }
}
