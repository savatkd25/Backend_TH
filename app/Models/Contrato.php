<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table ='contratos'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'contrato_id';

    // Campos asignados
    protected $fillable = ['empleado_id', 'fecha_inicio', 'fecha_fin', 'tipo_contrato'];

    // Relaciones con las otras tablas
    // Relación muchos a uno con Empleado----------------------
    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

}
