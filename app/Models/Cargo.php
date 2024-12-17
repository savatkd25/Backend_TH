<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    protected $table ='cargos'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'cargo_id';

    // Campos asignados
    protected $fillable = ['nombre_cargo', 'descripcion'];

     // Relaciones con las otras tablas
      // Relación uno a muchos con `Empleado`----------------------
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'cargo_id');
    }

    // Relación uno a muchos con `Reclutamiento`----------------------
    public function reclutamientos()
    {
        return $this->hasMany(Reclutamiento::class, 'cargo_id');
    }

}
