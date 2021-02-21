@extends('layout')

@section('title', 'Project')

@section('content')
    <h1>@lang('Project')</h1>
    
    <a href="{{ route('create') }}"> @lang('Create Project') </a>
    <ul>
        @forelse($projects as $project)
            <li><a href="{{route('projects.show', $project)}}"> {{$project->title}} </a> <br> <small>{{ $project->description }}</small> <!--<pre>{{var_dump($loop)}}</pre>--></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        <div style="height: 100px; width: 100px" >{{ $projects->links() }}</div>
    </ul>
@endsection