@extends('layouts.main')

@section('title', 'Cadastrar Categoria')

@section('content')

<h1>Criar categoria</h1>

<form action="/categories" method="post">
    
    @csrf
    <div class="form-group">
        <label for="name">Nome da Categoria:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome da categoria">
    </div>

    <div class="form-group">
        <label for="descricao">Descricao: </label>
        <input type="text" class="form-control" name="description" id="description"
            placeholder="Informe a descricao da categoria">
    </div>

    <div class="form-group">
        <button type="reset" class="btn btn-secondary">Limpar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection