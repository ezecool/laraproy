<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    // Request lleva informacion de la peticion (en este caso campos del formulario)
    public function store(Request $request) {
        // return $request;
        // return $request->get('email'); // Acceder a un campo
        // return request('email'); // Otra forma de acceder a un campo

        // El metodo validate, recibe un array con reglas de validacion. Nos devuelve a la pagina del formuario en caso de que la validacion falle.
        // Podemos pasa como segundo argumento, un array con los mensajes de error especificos para este formulario
        $mensaje = request()->validate([
            'name' => 'required',
            'email' => 'required|email', /* o ['required', 'email'] */
            'subject' => 'required',
            'content' => 'required|min:10'
        ], [
            'name.required' => __('I need your name')
        ]);

        Mail::to('castroabreguhernan@gmail.com')->queue(new MessageReceived($mensaje));

        return redirect()->route('home')->with('status', 'Recibimos su mensaje, le responderemos a la brevedad.');

    }
}
