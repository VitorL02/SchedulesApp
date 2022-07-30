@extends('layouts.main')
@section('title','Studio Crispim - Home Page')


@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um Horario</h1>
        <form action="/" method="get">
            <input type="datetime-local" name="search" id="search" class="form-control" placeholder="Encontre Seu Horario">
            <input type="submit" style='margin-top:5px;' class ='btn btn-primary' value="Busque um Horario">
        </form>
    </div>
    <div id="schedules-container">
        @if($search != '')
        <h2>Horario de Busca: {{date('d/m/y H:i',strtotime($search))}} </h2>
        @else
        <h2>Horario de Busca:</h2>
        @endif
        <p class="subtitle">Proximos Agendamentos</p>
            <div id="card-container" class="row">
                @foreach($scheduling as $schedule)
                <div class="card col-md-3">
                <ion-icon name="time-outline" class='clock-icon'></ion-icon>
                <div class="card-body">
                    <p class="card-date">Data do Agendamento: {{date('d/m/y',strtotime($schedule->date))}}</p>
                    <h5 class="card-title">Nome: {{$schedule->name}}</h5>
                    <h5 class="card-service">Serviço: {{$schedule->service}}</h5>
                    <p class="card-hour">Horario: {{date('H:i',strtotime($schedule->date))}}</p>
                   @auth
                   <a href="/schedules/edit/{{$schedule->id}}"  class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                    <form action="/schedules/{{$schedule->id}}" style="display: inline-block;" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                    </form>
                    @endauth
                </div>
                </div>
                @endforeach
                @if(count($scheduling)==0)
                    <p>Nenhum Agendamento Encontrado! </p>
                @endif
            </div>
    </div>
@endsection