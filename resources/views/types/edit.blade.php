@extends('layouts.types')

@section('content')
    <div class="container">
        <h1>Aggiorna un tipo</h1>
        <form action="{{ route('types.update', $type) }}" method="POST" class="mt-3">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-12">
                    <label for="nameInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="nameInput"
                        placeholder="Inserisci il nome..." required value="{{ $type->name }}" />
                </div>

                <div class="col-12">
                    <label for="descriptionInput" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="descriptionInput" rows="3" required
                        placeholder="Inserisci una descrizione...">{{ $type->description }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Aggiorna
            </button>
        </form>
    </div>
@endsection
