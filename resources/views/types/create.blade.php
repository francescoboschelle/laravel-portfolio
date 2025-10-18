@extends('layouts.types')

@section('content')
    <div class="container">
        <h1>Aggiungi tipo</h1>
        <form action="{{ route('types.store') }}" method="POST" class="mt-3">
            @csrf

            <div class="row mb-3">
                <div class="col-12">
                    <label for="nomeInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="nomeInput"
                        placeholder="Inserisci il nome..." required />
                </div>

                <div class="col-12">
                    <label for="descriptionInput" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="descriptionInput" rows="3" required
                        placeholder="Inserisci una descrizione..."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Invia
            </button>
        </form>
    </div>
@endsection
