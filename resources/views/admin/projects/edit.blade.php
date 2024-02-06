@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h2 class="mb-5">Inserisci un nuovo Progetto</h2>
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $project->title }}">
            </div>
            <div class="col-md-6">
                <label for="stack" class="form-label">Tecnologie</label>
                <input type="text" class="form-control" name="stack" id="stack" value="{{ $project->stack }}">
            </div>
            <div class="col-12">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ $project->slug }}">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description">{{ $project->title }}</textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>
    </div>
@endsection
