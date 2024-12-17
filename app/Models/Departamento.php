<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table ='departamentos'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'departamento_id';

    // Campos asignados 
    protected $fillable = ['nombre_depa', 'descripcion'];

    // Relaciones con las otras tablas
    // Relación uno a muchos con el modelo `Area`----------------------
    public function areas()
    {
        return $this->hasMany(Area::class, 'departamento_id');
    }
}
