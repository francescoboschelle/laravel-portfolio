@extends('layouts.projects')

@section('content')
    <div class="container">
        <h1>Aggiorna un progetto</h1>
        <form action="{{ route('projects.update', $project) }}" method="POST" class="mt-3">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-3">
                    <label for="nomeInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="nomeInput"
                        placeholder="Inserisci il nome..." required value="{{ $project->name }}" />
                </div>

                <div class="col-3">
                    <label for="clientInput" class="form-label">Cliente</label>
                    <input type="text" class="form-control" name="client" id="clientInput"
                        placeholder="Inserisci il cliente..." required value="{{ $project->client }}" />
                </div>

                <div class="col-3">
                    <label for="dateInput" class="form-label">Data</label>
                    <input type="date" class="form-control" name="date" id="dateInput" required
                        value="{{ $project->date }}" />
                </div>

                <div class="col-3">
                    <label for="typeInput" class="form-label">Tipo</label>
                    <select class="form-select" name="type_id" id="typeInput" required>
                        <option {{ $project->type_id == null ? 'selected' : '' }}>Seleziona...</option>
                        @foreach ($types as $type)
                            <option value="{{ $types->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <label for="summaryInput" class="form-label">Riassunto</label>
                    <textarea class="form-control" name="summary" id="summaryInput" rows="3" required
                        placeholder="Inserisci un riassunto...">{{ $project->summary }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Aggiorna
            </button>
        </form>
    </div>
@endsection
