<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;
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

Route::resource('/tasks', TaskController::class);

//Route::get('/tasks', [TaskController::class, 'index']);
//
//Route::get('/createtask', [TaskController::class, 'create']);
//
//Route::post('/storetask', [TaskController::class, 'store']);
//
//Route::get('/viewtask/{id}', [TaskController::class, 'show']);
//
//Route::get('/edittask/{id}', [TaskController::class, 'edit']);
//
//Route::post('/updatetask/{id}', [TaskController::class, 'update']);
