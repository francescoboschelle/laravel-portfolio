@extends('layouts.projects')

@section('content')
    <div class="container">
        <h1>I miei progetti</h1>
        <a class="btn btn-primary" href="{{ route('projects.create') }}" role="button">Aggiungi
            progetto</a>

        <div class="table-responsive mt-3">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Client</th>
                        <th scope="col">Summary</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td scope="row">{{ $project->name }}</td>
                            <td scope="row">{{ $project->date }}</td>
                            <td scope="row">{{ $project->client }}</td>
                            <td scope="row">{{ $project->summary }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
