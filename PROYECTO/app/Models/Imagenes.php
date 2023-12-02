<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['foto']; // Lista de campos fillable, incluyendo la ruta de la imagen
}
