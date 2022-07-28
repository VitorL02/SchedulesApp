@extends('layouts.main')
@section('title','SchedulesApp - Meus Agendamentos')


@section('content')

<div class="col-md-10 offset-md-1 dasboard-title-container">
    <h1>Meus Agendamentos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
       @if(count($scheduling)>0)
       @else
       <p>Você não tem eventos, <a href="/create-schedule"></a></p> 
</div>


@endsection