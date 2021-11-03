<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    // protected $fillable = ['title', 'url', 'description'];

    protected $guarded = []; // Deshabilitamos la proteccion para asignacion masiva

    // Laravel asocia el modelo a la tabla, tomando el nombre del modelo en plural y minusculas (projects en este caso). Tambien se lo puede indicar explicitamente con la propiedad $table (protected $table = 'mi_tabla';)
    use HasFactory;

    public function getRouteKeyName() {
        /*
        Este metodo sobrescribe el mismo metodo heredado, que permite obtener la columna clave del modelo/tabla, par que cuando le pasemos un modelo por parametro, automaticamente busque el objeto que corresponde que corresponde al valor de esta propiedad. Tambien se usa para generar las urls automaticamente
        */
        return 'url';
    }

}
