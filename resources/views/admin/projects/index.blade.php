@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <ul class="row p-0 g-3">
            @foreach ($projects as $project)
                <li class="card col-10 col-md-6 p-0">
                    <div class="card-header">
                        <h3 class="m-0">{{ $project->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{ $project->slug }}</p>
                        <p>{{ $project->stack }}</p>
                        <p>{{ $project->description }}</p>
                        <div class="buttons d-flex gap-2">
                            <a class="btn btn-primary" href="{{ route('admin.projects.show', $project) }}">Dettaglio</a>
                            <div class="delete">
                                <form action="{{ route('admin.projects.show', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button role="button" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
