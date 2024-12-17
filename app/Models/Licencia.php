<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    protected $table ='licencias'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'licencia_id';

    //Campos asignados
    protected $fillable = ['empleado_id', 'tipo_licencia_id', 'fecha_inicio', 'fecha_fin', 'motivo', 'estado'];

    //Relaciones con las otras tablas
    // Relación muchos a uno con Empleado----------------------
    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    // Relación muchos a uno con TipoLicencia----------------------
    public function tipos_licencia()
    {
        return $this->belongsTo(TipoLicencia::class, 'tipo_licencia_id');
    }
}

