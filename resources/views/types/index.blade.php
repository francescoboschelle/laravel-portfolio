@extends('layouts.types')

@section('content')
    <div class="container">
        <h1>I miei tipi</h1>
        <a class="btn btn-primary" href="{{ route('types.create') }}" role="button">Aggiungi
            tipo</a>

        @if (session('status'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger mt-3" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="table-responsive mt-3">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td scope="row">{{ $type->name }}</td>
                            <td scope="row">{{ $type->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
