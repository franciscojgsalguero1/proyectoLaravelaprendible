@extends('layout')

@section ('title', 'Project | ' . $project->title)

@section ('content')
    <h1> {{ $project->title }} </h1>
    <a href="{{ route('projects.edit', $project) }}">@lang("Edit")</a>
    <h1> {{ $project->url }} </h1>
    <p> {{ $project->description }}</p>
    <p> {{ $project->created_at }} </p>
    <p> {{ $project->created_at->diffForHumans() }} </p>
    <p> {{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }} </p>
@endsection