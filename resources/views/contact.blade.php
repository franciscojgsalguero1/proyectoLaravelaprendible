@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>@lang('Contact')</h1>
    
    <form method="post" action="{{route('message.store')}}">
        @csrf
        <!--{{ $errors }}<br>
        {{ var_dump($errors->any())}}<br>
        @if($errors->any())
        <p> Mostrar errores </p><br>
        @endif-->
        <input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small> :message </small><br>') !!}
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small> :message </small><br>') !!}
        <input name="subject" placeholder="Asunto... " value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small> :message </small><br>') !!}
        <textarea name="contect" placeholder="Mensaje... ">{{ old('content') }}</textarea><br>
        {!! $errors->first('contect', '<small> :message </small><br>') !!}
        <button>@lang('Send')</button>
    </form>
@endsection