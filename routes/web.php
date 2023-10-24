<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('task', function () {

    $TaskData=App\Models\Task::all();
    return view('task')->with('task',$TaskData);
   
});
Route::post('/submitTask',[App\Http\Controllers\TaskController::class,'submitTask']);
Route::get('/completedTask/{id}',[App\Http\Controllers\TaskController::class,'completedTask']);
Route::get('/NotCompletedTask/{id}',[App\Http\Controllers\TaskController::class,'NotCompletedTask']);
Route::get('/DeleteTask/{id}',[App\Http\Controllers\TaskController::class,'DeleteTask']);