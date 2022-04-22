<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleLineaCredito extends Model
{
    use HasFactory;
    
    public function detalle(){
        return $this->hasOne('App\Models\LineaCredito','id','lineaCredito_ID');
     }
}
