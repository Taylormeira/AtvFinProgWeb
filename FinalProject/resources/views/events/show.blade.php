@extends('layouts.main')

@section('title', 'Editar Evento')

@section('content')

<div class=" d-flex justify-content-between align-items-center ">
    <h1>Editar Evento</h1>
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
</div>
<div class="form-group">
    <h5>Nome do Evento:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->name}}</label>


    <h5>Descricao:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->description}}</label>

    <h5>Local:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->location}}</label>

    <h5>Data:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->date}}</label>

    <h5>Categoria:</h5>
    <label for="name" style="padding-left: 20px;">{{$event->category_name}}</label>


    <div class="form-group">

        <a href="/event" class="btn btn-secondary">Visualizar todos os eventos</a>
        <a href="/events/edit/{{$event->id}}" class="btn btn-secondary">Editar evento</a>
    </div>


    @endsection