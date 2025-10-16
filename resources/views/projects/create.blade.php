@extends('layouts.projects')

@section('content')
    <div class="container">
        <h1>Aggiungi progetto</h1>
        <form action="{{ route('projects.store') }}" method="POST" class="mt-3">
            @csrf

            <div class="row mb-3">
                <div class="col-4">
                    <label for="nomeInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="nomeInput"
                        placeholder="Inserisci il nome..." required />
                </div>

                <div class="col-4">
                    <label for="clientInput" class="form-label">Cliente</label>
                    <input type="text" class="form-control" name="client" id="clientInput"
                        placeholder="Inserisci il cliente..." required />
                </div>

                <div class="col-4">
                    <label for="dateInput" class="form-label">Data</label>
                    <input type="date" class="form-control" name="date" id="dateInput" required />
                </div>

                <div class="col-12">
                    <label for="summaryInput" class="form-label">Riassunto</label>
                    <textarea class="form-control" name="summary" id="summaryInput" rows="3" required
                        placeholder="Inserisci un riassunto..."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Invia
            </button>
        </form>
    </div>
@endsection
