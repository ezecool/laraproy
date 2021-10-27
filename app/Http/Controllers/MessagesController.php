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
        // return request('email'); // Otra forma de acceder a un campo

        // El metodo validate, recibe un array con reglas de validacion. Nos devuelve a la pagina del formuario en caso de que la validacion falle.
        // Podemos pasa como segundo argumento, un array con los mensajes de error especificos para este formulario
        request()->validate([
            'name' => 'required',
            'email' => 'required|email', /* o ['required', 'email'] */
            'subject' => 'required',
            'content' => 'required|min:10'
        ], [
            'name.required' => __('I need your name')
        ]);

        return 'Datos validados';

    }
}
