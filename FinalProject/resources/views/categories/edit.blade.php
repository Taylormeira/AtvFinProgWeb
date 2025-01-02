@extends('layouts.main')

@section('title', 'editar Categoria')

@section('content')

<h1>Editar categoria</h1>

<form action="/categories/update/{{$category->id}}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nome da Categoria:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" 
        placeholder="Informe o nome da categoria">
    </div>

    <div class="form-group">
        <label for="descricao">Descricao: </label>
        <input type="text" class="form-control" name="description" id="description" value="{{$category->description}}" 
            placeholder="Informe a descricao da categoria">
    </div>

    <div class="form-group">
        <a href="/categories" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection