@extends('layouts.admin')

@section('content')
    <h3>{{ $project->title }}</h3>
    <p>{{ $project->slug }}</p>
    <p>{{ $project->stack }}</p>
    <p>{{ $project->description }}</p>
    <a href="{{ route('admin.projects.edit', $project->id) }}">Modifica</a>
@endsection
