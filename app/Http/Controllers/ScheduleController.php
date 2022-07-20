<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function createSchedule(){
        return view('schedules.create-schedule');
    }
}
