@extends('layouts.main')

@section('title', 'Editar Relacionamento de Evento')

@section('content')

<h1>Editar Relacionamento de Evento</h1>

<form action="/participants/update/{{$participant->id}}" method="post">
    @csrf
    @method('PUT')

    
    <div class="form-group d-flex flex-column">
        <label for="event_id">evento: </label>
        <select name="event_id" id="event_id">
            @foreach($events as $event)
            <option value="{{$event->id}}" {{$event['id'] == $participant['event_id'] ? 'selected' : ''}}>{{$event->name}}</option>
            @endforeach
        </select>
        <label for="user_id">Usuário: </label>
        <select name="user_id" id="user_id">
            @foreach($users as $user)
            <option value="{{$user->id}}" {{$user['id'] == $participant['user_id'] ? 'selected' : ''}}>{{$user->name}}</option>
            @endforeach
        </select>
    </div>
 
    <div class="form-group">
        <a href="/tasks" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection