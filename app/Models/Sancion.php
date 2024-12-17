<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{
    use HasFactory;
    protected $table ='sanciones'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'sancion_id';

    //Campos asignados
    protected $fillable = ['empleado_id', 'fecha_sancion', 'motivo', 'descripcion'];

    //Relaciones con las otras tablas
    // Relación uno a uno con Empleado----------------------
     public function empleados()
     {
         return $this->belongsTo(Empleado::class, 'empleado_id'); 
     }
}
