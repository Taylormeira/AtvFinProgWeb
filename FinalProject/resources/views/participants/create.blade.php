@extends('layouts.main')

@section('title', 'Relacionar Evento ao Usuário')

@section('content')

<h1>Relacione o Evento Desejado</h1>

<form action="/participants" method="post">

    @csrf

    <div class="form-group d-flex flex-column">
        <label for="event_id">evento: </label>
        <select name="event_id" id="event_id">
            @foreach($events as $event)
            <option value="{{$event->id}}">{{$event->name}}</option>
            @endforeach
        </select>
        <label for="user_id">Usuário: </label>
        <select name="user_id" id="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="reset" class="btn btn-secondary">Limpar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection