<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JornadaLaboral extends Model
{
    use HasFactory;
    protected $table ='jornadas_laboral'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'jornada_id';

    // Campos asignados
    protected $fillable = ['tipos', 'horas'];

    // Relaciones con las otras tablas
    // Relación uno a muchos con `Empleado`----------------------
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'jornada_id');
    }
}
