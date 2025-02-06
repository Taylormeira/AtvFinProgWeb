@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
<div class=" d-flex justify-content-between align-items-center ">
    <h1>Lista de Eventos</h1>

    <a href="/events/create" type="button" class="btn btn-primary">
        <i class="bi bi-plus-square"></i>
        <span>Novo Evento</span>
    </a>
</div>


<table class="table">
    <thead>
        <tr>
            <th>ID Evento</th>
            <th>NOME</th>
            <th>Descricao</th>
            <th>Localização</th>
            <th>Data</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)

        <tr>
            <td>{{$event->id }}</td>
            <td>{{$event->name }}</td>
            <td>{{$event->description }}</td>
            <td>{{$event->location }}</td>
            <td>{{\Carbon\Carbon::parse($event->date)->format('d/m/Y')}}</td>
            <td>{{$event->category_name }}</td>
            <td>
                <a class="btn btn-primary" href="/events/edit/{{$event->id}}">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
                <form action="/events/{{$event->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir o evento?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection