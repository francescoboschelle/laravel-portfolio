@extends('layouts.types')

@section('content')
    <div class="container">

        <h1>{{ $type->name }}</h1>
        <div class="d-flex gap-2">
            <a class="btn btn-primary" href="{{ route('types.edit', $type) }}" role="button">Modifica</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalId">
                Elimina
            </button>
        </div>
        <hr>
        <p>{{ $type->description }}</p>
    </div>

    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Sei sicuro?
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Sicuro di voler eliminare questo tipo?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Annulla
                    </button>
                    <form action="{{ route('types.destroy', $type) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" role="button">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
