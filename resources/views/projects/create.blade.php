@extends('layout')

@section('title', 'Create Project')

@section('content')
    <h1>@lang('Create project')</h1>
    
    @if($errors->any())
        @foreach($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
    @endif
    
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label>
            @lang('Project title') <br>
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        <br>
        <label>
            @lang('Project URL') <br>
            <input type="text" name="url" value="{{ old('url') }}">
        </label>
        <br>
        <label>
            @lang('Project description') <br>
            <textarea name="description">{{ old('description') }}</textarea>
        </label>
        <br>
        <button>@lang('Save')</button>
    </form>
@endsection