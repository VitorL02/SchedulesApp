@extends('layouts.main')
@section('title','SchedulesApp - Home Page')


@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um Horario</h1>
        <form action="/" method="get">
            <input type="datetime-local" name="search" id="search" class="form-control" placeholder="Encontre Seu Horario">
        </form>
    </div>
    <div id="schedules-container">
        <h2>Horario de Busca:</h2>
        <p class="subtitle">Proximos Agendamentos</p>
            <div id="card-container" class="row">
                @foreach($scheduling as $schedule)
                <div class="card col-md-3">
                <ion-icon name="time-outline" class='clock-icon'></ion-icon>
                <div class="card-body">
                    <p class="card-date">Data do Agendamento: {{$schedule->date}}</p>
                    <h5 class="card-title">Nome: {{$schedule->name}}</h5>
                    <h5 class="card-service">Serviço: {{$schedule->service}}</h5>
                    <p class="card-hour">Horario: {{$schedule->date}}</p>
                    <a href="" class="btn btn-primary" class="edit-button">Editar</a>
                  
                </div>
                </div>
                @endforeach
                @if(count($scheduling)==0)
                    <p>Nenhum Agendamento Encontrado! </p>
                @endif
            </div>
    </div>
@endsection