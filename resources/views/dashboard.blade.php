@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mt-5 gap-2">
        <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}">Visualizza
            l'elenco
            dei
            progetti</a>
        <a class="btn btn-dark" href="{{ route('admin.projects.create') }}">Aggiungi un nuovo progetto</a>
    </div>
@endsection
