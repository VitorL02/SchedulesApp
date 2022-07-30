@extends('layouts.main')
@section('title','SchedulesApp - Editar Agendamento')


@section('content')
<div id="schedule-create-container" class='col-md-6 offset-md-3'>
        <h1>Editando agendamento: {{$schedule->name}} </h1>
        <form action="/schedules/update/{{$schedule->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Digite Seu Nome: </label>
                <input type="text" required placeholder="Digite seu Nome" value="{{$schedule->name}}" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Selecione a data que deseja Agendar: </label>
                <input type="datetime-local" required placeholder="Selecione a Data que deseja Agendar" value="{{$schedule->date}}" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Selecione o serviço desejado </label>
                <select name="service" required id="service" class="form-select">
                    <option value="Corte de cabelo" {{$schedule->service == "Corte de cabelo" ? "selected='selected'" : "" }}>Corte de cabelo</option>
                    <option value="Pintura" {{$schedule->service == "Pintura" ? "selected='selected'" : "" }}>Pintura</option>
                    <option value="Unha de Gel"{{$schedule->service == "Unha de Gel" ? "selected='selected'" : "" }} >Unha de Gel</option>
                    <option value="Escova" {{$schedule->service == "Escova" ? "selected='selected'" : "" }}>Escova</option>
                    <option value="Manicure Simples"{{$schedule->service == "Manicure Simples" ? "selected='selected'" : "" }}>Manicure Simples</option>
                    <option value="Maquiagem"{{$schedule->service == "Maquiagem" ? "selected='selected'" : "" }}>Maquiagem</option>
                    <option value="Penteado"{{$schedule->service == "Penteado" ? "selected='selected'" : "" }}>Penteado</option>
                    <option value="Cílios"{{$schedule->service == "Cílios" ? "selected='selected'" : "" }}>Cílios</option>
                    <option value="Design de Sobrancelha"{{$schedule->service == "Design de Sobrancelha" ? "selected='selected'" : "" }}>Design de Sobrancelha</option>
                    <option value="Sombrancelha de Rena"{{$schedule->service == "Sombrancelha de Rena" ? "selected='selected'" : "" }}>Sombrancelha de Rena</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary"  class="form-check-input" value="Editar Agendamento">
        </form>
    </div>



@endsection