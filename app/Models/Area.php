<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table ='areas';  // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'area_id';
    
    // Campos asignados
    protected $fillable = ['nombre_area', 'descripcion', 'departamento_id', 'rol_id'];

    // Relaciones con las otras tablas
    // Relación muchos a uno con el modelo `Departamento`----------------------
    public function departamentos()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    // Relación muchos a uno con el modelo `RolPago`----------------------
    public function roles_pago()
    {
        return $this->belongsTo(RolPago::class, 'rol_id');
    }

    // Relación uno a muchos con el modelo `Empleado`----------------------
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'area_id');
    }
}
