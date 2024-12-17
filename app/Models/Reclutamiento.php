<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclutamiento extends Model
{
    use HasFactory;
    protected $table ='reclutamientos'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'reclutamiento_id';

    // Campos asignados
    protected $fillable = ['empleado_id', 'cargo_id', 'fecha_inicio', 'fecha_fin', 'estado', 'descripcion'];

    //Relaciones con las otras tablas
    //Relacion con la tabla empleado----------------------
    // Relación muchos a uno
    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id'); 
    }
    //Relación con la tabla Cargos----------------------
    // Relación muchos a uno
    public function cargos()
    {
       return $this->belongsTo(Cargo::class, 'cargo_id'); 
    }


}
