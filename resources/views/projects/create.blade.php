@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

    <h1>Crear proyecto</h1>

    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">Titulo</label>
            <br>
            <input type="text" name="title">
        </div>

        <div>
            <label for="">Url</label>
            <br>
            <input type="text" name="url">
        </div>

        <div>
            <label for="">Descripci&oacute;n</label>
            <br>
            <textarea name="description"></textarea>
        </div>

        <button type="submit">Guardar</button>

    </form>

@endsection
