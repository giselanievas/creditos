<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name' => 'Admin']);
       $role2 = Role::create(['name' => 'Operador']);
       $role3 = Role::create(['name' => 'Invitado']);

       Permission::create(['name' => 'admin.credito'])->syncRoles([$role1]);
       Permission::create(['name' => 'operador.credito'])->syncRoles([$role2]);
       Permission::create(['name' => 'invitado.credito'])->syncRoles([$role3]);
       
       
    }
}
