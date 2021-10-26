<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    // Request lleva informacion de la peticion (en este caso campos del formulario)
    public function store(Request $request) {
        // return $request;
        // return $request->get('email'); // Acceder a un campo
        return request('email'); // Otra forma de acceder a un campo
    }
}
