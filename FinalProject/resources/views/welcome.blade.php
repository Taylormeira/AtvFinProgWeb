@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

<h2 style="text-align: center; font-size: 40px">Últimos Eventos Adicionados.</h2>
<div class="row justify-content-center m-2">
    @foreach ($events as $key => $event)
    <div class="glass col-lg-4 m-4 p-4 rounded position-relative" style="--r: {{ $key * 20 - 20 }}deg;"
        data-text="Top - {{ $key + 1 }}">
        <h2 style="text-align: center; color:cornflowerblue" class="fw-normal">{{ $event->name }}</h2>
        <p style="text-align: justify;"><strong>Data:</strong> {{\Carbon\Carbon::parse($event->date)->format('d/m/Y') }}.</p>
        <p style="text-align: justify;"><strong>Local:</strong> {{ $event->location }}.</p>
        <p>
            <a class="w-100 btn btn-lg btn-outline-primary" href="/events/{{$event->id}}">Conferir</a>
        </p>
    </div>
    @endforeach
</div>


@endsection