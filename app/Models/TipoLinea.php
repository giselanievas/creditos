<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLinea extends Model
{
    use HasFactory;
    public function tipoLinea(){

        return $this->belongsTo(LineaCredito::class);
    }
}
