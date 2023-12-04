<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model

{
    public static function obtenerDatos(){
        $conexion = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');
        $consulta = $conexion->query('SELECT cantidad_vendida, precio_unitario FROM ventas');
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
