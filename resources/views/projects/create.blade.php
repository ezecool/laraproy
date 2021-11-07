@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

    <h1>Crear proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

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
