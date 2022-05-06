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
            'localidad' => 'Junin',
            'telefono' => '2364335601',
            'confirmed' => 1,

        ])->assignRole('admin');

        User::create([
            'name' => 'Operador',
            'email' => 'gnievas@grupojunin.com',
            'password' => bcrypt('123456789'),
            'concesionaria' => 'Operador',
            'localidad' => 'Junin',
            'telefono' => '2364335601',
            'confirmed' => 1,

        ])->assignRole('operador');
    }
    
}
