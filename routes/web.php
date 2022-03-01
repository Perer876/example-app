<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);

/*
Route::get('/tasks', function () {
    $tareas = DB::table('tasks')->get();
    return view('tasks.indexTasks', ['tareas' => $tareas]);
    // return view('tasks.indexTasks', compact('tareas));
});

Route::get('/tasks/create', function () {
    return view('tasks.formTask');
});
*/