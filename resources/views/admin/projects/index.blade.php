@extends('layouts.admin')

@section('content')
    <ul>
        @foreach ($projects as $project)
            <li>
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->slug }}</p>
                <p>{{ $project->stack }}</p>
                <p>{{ $project->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection
