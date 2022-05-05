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
       $admin = Role::create(['name' => 'admin']);
       $operador = Role::create(['name' => 'operador']);
       $invitado = Role::create(['name' => 'invitado']);

       Permission::create(['name' => 'inicio'])->syncRoles([$admin,$operador,$invitado]);
////////////////////////////////////////////  Tipo  de linea de creditos /////////////////////////////////////////////////////////////////
       Permission::create(['name' => 'tipoLineaCredito'])->syncRoles([$admin]);
       Permission::create(['name' => 'agregarTipoLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'editarTipoDeLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'updateTipoDeLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'habilitarTipoLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'eliminaTipoDeLinear'])->syncRoles([$admin]);

////////////////////////////////////////////  Linea de creditos /////////////////////////////////////////////////////////////////
       Permission::create(['name' => 'lineaCredito'])->syncRoles([$admin]);
       Permission::create(['name' => 'agregarLineaCredito'])->syncRoles([$admin]);
       Permission::create(['name' => 'guardarLineaCredito'])->syncRoles([$admin]);
       Permission::create(['name' => 'editarLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'updateLinea'])->syncRoles([$admin]);

 //////////////////////////////////////////// Detalle Linea de creditos /////////////////////////////////////////////////////////////////
       Permission::create(['name' => 'detalleLineaCredito'])->syncRoles([$admin]);
       Permission::create(['name' => 'agregarDetalleLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'guardarDetalleLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'editarDetalleDeLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'updateDetalleDeLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'habilitarDetalleLinea'])->syncRoles([$admin]);
       Permission::create(['name' => 'bajaDetalleDeLinear'])->syncRoles([$admin]);
   //////////////////////////////////////////// Cotizador /////////////////////////////////////////////////////////////////
       Permission::create(['name' => 'cotizador'])->syncRoles([$admin,$operador]);
  }
}