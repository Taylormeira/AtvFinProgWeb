@extends('layouts.main')

@section('title', 'Editar Evento')

@section('content')

<h1>Editar Evento</h1>

<form action="/events/update/{{$event->id}}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nome do Evento:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$event->name}}" placeholder="Informe o nome do Evento">
    </div>

    <div class="form-group">
        <label for="description">Descricao: </label>
        <input type="text" class="form-control" name="description" id="description" value="{{$event->description}}" 
            placeholder="Informe a descricao da tarefa">
    </div>
    
    <div class="form-group">
        <label for="location">Local: </label>
        <input type="text" class="form-control" name="location" id="location" value="{{$event->location}}" 
            placeholder="Informe o local do Evento">
    </div>
    
    
    <div class="form-group">
        <label for="date">Data: </label>
        <input type="date" class="form-control" name="date" id="date" value="{{$event->date}}" 
            placeholder="Informe a data do Evento">
    </div>

    <div class="form-group d-flex flex-column">
        <label for="category_id">Categoria: </label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
            <option value="{{$category['id']}}" {{$category['id'] == $event['category_id'] ? 'selected' : ''}}>{{$category->name}}</option>
            @endforeach
        </select>
    </div>
 
    <div class="form-group">
        <a href="/tasks" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection