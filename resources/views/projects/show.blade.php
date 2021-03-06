@extends('layout')

@section('title', "Portfolio | $project->title")

@section('content')

    <h1>{{ $project->title }}</h1>

    <a href="{{ route('projects.edit', $project) }}">Editar</a>

    <form action="{{ route('projects.destroy', $project) }}" method="post">
        @csrf
        @method('delete')
        <button>Eliminar</button>
    </form>

    <p>{{ $project->description }}</p>

    <p>{{ $project->updated_at->diffForHumans() }}</p>

@endsection
