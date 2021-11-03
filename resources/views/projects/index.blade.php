@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <a href="{{ route('projects.create') }}">Nuevo proyecto</a>

    <ul>
        @forelse ($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
            </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>

    {{ $projects->links() }}

@endsection
