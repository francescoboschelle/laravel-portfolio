@extends('layouts.projects')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <small>For: {{ $project->client }}<br>Made at: {{ $project->date }}</small>
        <hr>
        <p>{{ $project->summary }}</p>
    </div>
@endsection
