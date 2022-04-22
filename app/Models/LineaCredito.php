<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaCredito extends Model
{
    use HasFactory;

    public function tipoDeCredito(){
       return $this->hasOne('App\Models\TipoLinea','id','tipoLinea_id');
    }

  


}
    
