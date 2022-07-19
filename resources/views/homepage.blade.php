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
                <div class="card col-md-3">
                <ion-icon name="time-outline" class='clock-icon'></ion-icon>
                <div class="card-body">
                    <p class="card-date">Data do Agendamento</p>
                    <h5 class="card-title">Nome:</h5>
                    <h5 class="card-service">Serviço:</h5>
                    <p class="card-hour">Horario:</p>
                    <a href="" class="btn btn-primary" class="edit-button">Editar</a>
                </div>
                </div>
            </div>
    </div>
@endsection