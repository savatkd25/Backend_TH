<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormacionAcademica extends Model
{
    use HasFactory;
    protected $table ='formaciones_academicas'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'formacion_id';

    //Campos asignados
    protected $fillable = ['empleado_id', 'nivel', 'institucion', 'especialidad'];

   //Relaciones con las otras tablas
   // Relación muchos a uno con Empleado----------------------
   public function empleados()
   {
       return $this->belongsTo(Empleado::class, 'empleado_id');
   }

}
