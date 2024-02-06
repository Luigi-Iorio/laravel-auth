@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h2 class="mb-5">Inserisci un nuovo Progetto</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="col-md-6">
                <label for="stack" class="form-label">Tecnologie</label>
                <input type="text" class="form-control" name="stack" id="stack">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </div>
        </form>
    </div>
@endsection
