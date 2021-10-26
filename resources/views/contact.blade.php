@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form method="post" action="{{ route('contact') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre..." value="Hernan"><br>
        <input type="email" name="email" placeholder="Email..." value="hernan@localhost.com"><br>
        <input type="subject" placeholder="Asunto..." value="pregunta"><br>
        <textarea name="content" placeholder="Mensaje...">LAALALALA</textarea><br>
        <button>Enviar</button>
    </form>
@endsection
