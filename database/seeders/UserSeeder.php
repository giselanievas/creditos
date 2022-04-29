<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'franputrino@gmail.com',
            'password' => bcrypt('123456789'),
            'concesionaria' => 'Administrador',
            'Localidad' => 'Junin',
            'Telefono' => '2364335601',
            'confirmed' => 1,

        ])->assignRole('admin');
    }
    
}
