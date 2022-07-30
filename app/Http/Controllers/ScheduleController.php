<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scheduling;

class ScheduleController extends Controller
{
    public function index(){
        $search = request('search');
        if($search){
            $scheduling = Scheduling::where(
                'date','=',$search
        )->get();
        }else{
            $scheduling = Scheduling::all();
        }


        return view('homepage',['scheduling'=>$scheduling,'search'=>$search]);
    }

    public function createSchedule(){
        return view('schedules.create-schedule');
    }

    public function dashboard(){
        $user = auth()->user();

        $schedulings = $user->schedulings;

        return view('schedules.dashboard',['schedulings'=>$schedulings]);

    }

    public function destroy($id){
        Scheduling::findOrFail($id)->delete();

        return redirect('/')->with('msg','Evento Excluido com Sucesso');
    }

    public function edit($id){
        $schedule = Scheduling::findOrFail($id);

        return view('schedules.edit',['schedule'=>$schedule]);
    }
    public function update(Request $request){
        Scheduling::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg','Agendamento Editado com sucesso');
    }

    public function store(Request $request){
        $scheduling = new Scheduling;

        $scheduling->name=$request->name;
        $scheduling->date=$request->date;
        $scheduling->service=$request->service;

        $user = auth()->user();
        $scheduling->user_id = $user->id;

        $scheduling->save();

        return redirect('/')->with('msg','Agendamento Salvo com sucesso');
    }
    public function register(){
        return redirect('/');
    }
    
}
