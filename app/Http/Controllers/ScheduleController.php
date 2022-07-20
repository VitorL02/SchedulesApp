<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scheduling;

class ScheduleController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function createSchedule(){
        return view('schedules.create-schedule');
    }

    public function store(Request $request){
        $scheduling = new Scheduling;

        $scheduling->name=$request->name;
        $scheduling->date=$request->date;
        $scheduling->service=$request->service;

        $scheduling->save();

        return redirect('/')->with('msg','Agendamento Salvo com sucesso');
    }
}
