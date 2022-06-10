<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbImagen extends Model
{
    use HasFactory;
    protected $table="imagenes";
    protected $primarykey="id";
    protected $fillable=['nombre','imagen'];

}
