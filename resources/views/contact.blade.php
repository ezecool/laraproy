@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>{{ __('Contact') }}</h1>
    {{-- En Laravel, todas las vistas tienen acceso a la variable $errors --}}
    {{-- $erros tiene un objeto con un atributo para cada campo y un array de errores para cada uno de estos --}}

    {{-- Pregunto si hay errores --}}
    {{-- @if($errors->any()) --}}

        {{-- Recorro cada mensaje error --}}
        {{-- @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach

    @endif --}}

    <form method="post" action="{{ route('messages.store') }}">

        @csrf

        <input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!} {{-- El metodo first() devuelve el primer mensaje de error del campo que le indiquemos. :message se reemplaza por el textop del error --}}

        <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" placeholder="mensaje" value="{{ old('content') }}"></textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>@lang('Send')</button>
    </form>
@endsection
