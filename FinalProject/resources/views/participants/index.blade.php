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
            <th>ID Relacionamento</th>
            <th>ID Evento</th>
            <th>Id usuário</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participants as $participant)
        <tr>
            <td>{{$participant->id }}</td>
            <td>{{$participant->event_id }}</td>
            <td>{{$participant->user_id }}</td>
            <td>
                <a class="btn btn-primary" href="/participants/edit/{{$participants->id}}">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
                <form action="/participants/{{$participants->id}}" method="post">
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