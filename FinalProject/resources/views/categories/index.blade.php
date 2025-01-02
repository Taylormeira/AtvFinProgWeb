@extends('layouts.main')

@section('title', 'Categorias')

@section('content')
<div class=" d-flex justify-content-between align-items-center ">
    <h1>Lista de Categorias</h1>

    <a href="/categories/create" type="button" class="btn btn-primary">
        <i class="bi bi-plus-square"></i>
        <span>Nova Categoria</span>
    </a>
</div>


<table class="table">
    <thead>
        <tr>
            <th>ID Categoria</th>
            <th>NOME</th>
            <th>Descricao</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)

        <tr>
            <td>{{$category->id }}</td>
            <td>{{$category->name }}</td>
            <td>{{$category->description }}</td>
            <td>
                <a class="btn btn-primary" href="/categories/edit/{{$category->id}}">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
                <form action="/categories/{{$category->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir a categoria?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection