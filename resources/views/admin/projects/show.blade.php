@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h3>Titolo: {{ $project->title }}</h3>
        <p>Slug: {{ $project->slug }}</p>
        <p>Stack: {{ $project->stack }}</p>
        <p>Descrizione: {{ $project->description }}</p>
        <a class="btn btn-primary" href="{{ route('admin.projects.edit', $project) }}">Modifica</a>
    </div>
@endsection
