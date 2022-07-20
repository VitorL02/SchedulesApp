@extends('layouts.main')
@section('title','SchedulesApp - Criar Agendamento')


@section('content')
    <div id="schedule-create-container" class='col-md-6 offset-md-3'>
        <h1>Agende Seu Horário!</h1>
        <form action="/schedules" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Digite Seu Nome: </label>
                <input type="text" required placeholder="Digite seu Nome" name="name" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Selecione a data que deseja Agendar: </label>
                <input type="datetime-local" required placeholder="Selecione a Data que deseja Agendar" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Selecione o serviço desejado </label>
                <select name="service" required id="service" class="form-select">
                    <option value="Corte de cabelo">Corte de cabelo</option>
                    <option value="Pintura">Pintura</option>
                    <option value="Unha de Gel">Unha de Gel</option>
                    <option value="Escova">Escova</option>
                    <option value="Manicure Simples">Manicure Simples</option>
                    <option value="Maquiagem">Maquiagem</option>
                    <option value="Penteado">Penteado</option>
                    <option value="Cílios">Cílios</option>
                    <option value="Design de Sobrancelha">Design de Sobrancelha</option>
                    <option value="Sombrancelha de Rena">Sombrancelha de Rena</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary"  class="form-check-input" value="Criar Evento">
        </form>
    </div>
@endSection