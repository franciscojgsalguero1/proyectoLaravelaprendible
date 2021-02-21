@extends('layout')

@section('title', 'Edit Project')

@section('content')
    <h1>@lang('Edit project')</h1>
    
    @if($errors->any())
        @foreach($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
    @endif
    
    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        <label>
            @lang('Project title') <br>
            <input type="text" name="title" value="{{ old('title', $project->title) }}">
        </label>
        <br>
        <label>
            @lang('Project URL') <br>
            <input type="text" name="url" value="{{ old('url', $project->url) }}">
        </label>
        <br>
        <label>
            @lang('Project description') <br>
            <textarea name="description">{{ old( 'description', $project->description) }}</textarea>
        </label>
        <br>
        <button>@lang('Update')</button>
    </form>
@endsection