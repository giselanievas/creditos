<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaCredito extends Model
{
    use HasFactory;
    public function detalleCredito(){

        return $this->belongsTo(DetalleLineaCredito::class);
    }

  


}
    
