<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionDesempeño extends Model
{
    use HasFactory;
    protected $table ='evaluaciones_desempeno';

     // Clave primaria personalizada
     protected $primaryKey = 'evaluacion_id';

     // Campos asignados
    protected $fillable = ['empleado_id', 'fecha', 'calificacion', 'comentarios'];

    //Relaciones con las otras tablas
    // Relación uno a uno con Empleado----------------------
    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id'); 
    }
}
