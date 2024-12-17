<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table ='ubicaciones'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'ubicacion_id';

    // Campos asignados
    protected $fillable = ['edificio', 'piso', 'oficina'];

    // Relaciones con las otras tablas
    // Relación uno a muchos con el modelo `Empleado`----------------------
     public function empleados()
     {
         return $this->hasMany(Empleado::class, 'ubicacion_id');
     }
}
