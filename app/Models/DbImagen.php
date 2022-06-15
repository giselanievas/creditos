<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbImagen extends Model
{
    use HasFactory;
    protected $table="table_grillas";
    protected $primarykey="id";
    protected $fillable=['descripcion','imagen'];

}
