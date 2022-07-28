@extends('layouts.main')
@section('title','SchedulesApp - Meus Agendamentos')


@section('content')

<div class="col-md-10 offset-md-1 dasboard-title-container">
    <h1>Meus Agendamentos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-schedules-container">
       @if(count($schedulings)>0)
       <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Serviço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
       <tbody>
        @foreach($schedulings as $scheduling)
            <tr>
                <td scropt="row">{{$loop-> index + 1}}</td>
                <td>{{$scheduling->name}}</td>
                <td>{{$scheduling->date}}</td>
                <td>{{$scheduling->service}}</td>
                <td>
                     <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                    <form action="/events/{{$scheduling->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
       </tbody>
       </table>
       @else
       <p>Você não tem eventos, <a href="/create-schedule"></a></p> 
       @endif
</div>


@endsection