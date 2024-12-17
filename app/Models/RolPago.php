<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolPago extends Model
{
    use HasFactory;
    protected $table ='roles_pago'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'rol_id';
    
    //Campos asignados
    protected $fillable = ['monto', 'fecha_inicio', 'fecha_fin', 'fecha_actualizacion'];

    //Relaciones con las otras tablas
    // Relación uno a muchos con Empleado----------------------
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'rol_id');
    }
}
