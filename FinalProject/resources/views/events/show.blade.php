@extends('layouts.main')

@section('title', 'Editar Evento')

@section('content')

<div class=" d-flex justify-content-between align-items-center ">
    <h1>Editar Evento</h1>
    @auth
    <div>
        <a href="/events/create" type="button" class="btn btn-primary">
            <i class="bi bi-plus-square"></i>
            <span>Novo Evento</span>
        </a>
        <a href="/events/edit/{{$event->id}}" type="button" class="btn btn-primary">
            <i class="bi bi-plus-square"></i>
            <span>Editar Evento</span>
        </a>
    </div>
    @endauth
</div>
<div class="form-group">
    <h5>Nome do Evento:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->name}}</label>


    <h5>Descricao:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->description}}</label>

    <h5>Local:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->location}}</label>

    <h5>Data:</h5>
    <label for="name" style="padding-left: 20px;">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</label>

    <h5>Categoria:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->category_name}}</label>

@endsection