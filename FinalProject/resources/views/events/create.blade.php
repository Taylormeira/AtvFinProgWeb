@extends('layouts.main')

@section('title', 'Cadastrar Evento')

@section('content')

<h1>Criar novo Evento</h1>

<form action="/events" method="post">
    
    @csrf
    <div class="form-group">
        <label for="name">Nome do Evento:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome do Evento">
    </div>

    <div class="form-group">
        <label for="description">Descrição: </label>
        <input type="text" class="form-control" name="description" id="description"
            placeholder="Informe a descricao do Evento">
    </div>

    <div class="form-group">
        <label for="location">Local: </label>
        <input type="text" class="form-control" name="location" id="location"
            placeholder="Informe o local do Evento">
    </div>
    
    <div class="form-group">
        <label for="date">Data: </label>
        <input type="date" class="form-control" name="date" id="date"
            placeholder="Informe a data do Evento">
    </div>
    
    <div class="form-group d-flex flex-column">
        <label for="category_id">Categoria: </label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="reset" class="btn btn-secondary">Limpar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection