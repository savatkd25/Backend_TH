<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialLaboral extends Model
{
    use HasFactory;
    protected $table ='historiales_laborales'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'historial_id';

    //Campos asignados
    protected $fillable = ['empleado_id', 'cargo_id', 'tipo_licencia_id', 'fecha_inicio', 'fecha_fin', 'descripcion'];

    // Relaciones con las otras tablas
    // Relación muchos a uno con Cargo----------------------
    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    // Relación muchos a uno con TipoLicencia----------------------
    public function tipos_licencia()
    {
        return $this->belongsTo(TipoLicencia::class, 'tipo_licencia_id');
    }
}


