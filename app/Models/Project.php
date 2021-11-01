<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Laravel asocia el modelo a la tabla, tomando el nombre del modelo en plural y minusculas (projects en este caso). Tambien se lo puede indicar explicitamente con la propiedad $table (protected $table = 'mi_tabla';)
    use HasFactory;
}
