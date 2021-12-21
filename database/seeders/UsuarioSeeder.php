<?php

namespace Database\Seeders;

use App\Models\UserChanges;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',  
            'password' => bcrypt('12345qwe') 
        ]);
        $role->assignRole('Admin User');

        $role = User::create([
            'name'=>'user1',
            'email'=>'user1@gmail.com',  
            'password' => bcrypt('12345qwe') 
        ]);
        $role->assignRole('Normal User');

        User::factory(15)->create();
    }
}
