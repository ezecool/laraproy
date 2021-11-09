@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

    <h1>Crear proyecto</h1>

    @include('partials.validation-errors')

    <form action="{{ route('projects.store') }}" method="post">

        @csrf

        @include('projects._form', ['btnText' => 'Crear'])

    </form>

@endsection
