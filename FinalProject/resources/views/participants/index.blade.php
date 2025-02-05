@extends('layouts.main')

@section('title', 'Participants')

@section('content')
<div class=" d-flex justify-content-between align-items-center ">
    <h1>Lista de Eventos do usuário</h1>

    <a href="/participants/create" type="button" class="btn btn-primary">
        <i class="bi bi-plus-square"></i>
        <span>Relacionar novo evento</span>
    </a>
</div>


<table class="table">
    <thead>
        <tr>
            <th>ID Evento</th>
            <th>Nome Evento</th>
            <th>Usuário usuário</th>
            <th>Data de Insclussão</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participants as $participant)
        <tr>
            <td>{{ $participant->event_id }}</td>
            <td>{{ $participant->event_name }}</td>
            <td>{{ $participant->user_name }}</td>
            <td>{{ $participant->crated_at }}</td>

            <td>
                <a class="btn btn-primary" href="/participants/edit/{{ $participant->id }}">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
                <form action="/participants/{{ $participant->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir a relação evento?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection