@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form method="post" action="{{route('contact')}}">
        @csrf
        {{ $errors }}<br>
        {{ var_dump($errors->any())}}<br>
        @if($errors->any())
        <p> Mostrar errores </p><br>
        @endif
        <input name="name" placeholder="Nombre... "><br>
        <input type="email" name="email" placeholder="email"><br>
        <input name="subject" placeholder="Asunto... "><br>
        <textarea name="contect" placeholder="Mensaje... "></textarea><br>
        <button>Enviar</button>
    </form>
@endsection