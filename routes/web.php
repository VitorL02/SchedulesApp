<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ScheduleController;

Route::get('/',[ScheduleController::class,'index']);
Route::get('/create-schedule',[ScheduleController::class,'createSchedule'])->middleware('auth');
Route::get('/dashboard',[ScheduleController::class,'goDashBoard'])->name('dashboard')->middleware('auth');
Route::get('/dashboard',[ScheduleController::class,'dashboard'])->middleware('auth');
Route::post('/schedules',[ScheduleController::class,'store']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/',[ScheduleController::class,'index']); 
// });
