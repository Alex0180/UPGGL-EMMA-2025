<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

//Ruta asignada con un controlador

Route::get('posts', [homeController::class, "index"]);

Route::get('/posts/create', [homeController::class, "create"]);

Route::get('/posts/edit', [homeController::class, "edit"]);

Route::get('/posts/{id}/{categoria}', [homeController::class, "show"]);



use App\Http\Controllers\MathController;

Route::get('/sum/{a}/{b}', [MathController::class, 'sum']);
Route::get('/subtract/{a}/{b}', [MathController::class, 'subtract']);
Route::get('/multiply/{a}/{b}', [MathController::class, 'multiply']);



use App\Http\Controllers\StudentController;

Route::get('/student/{name}/{age}', [StudentController::class, 'show']);


use App\Http\Controllers\AgeCalculatorController;

Route::get('/calculate-age/{birthYear}', [AgeCalculatorController::class, 'calculate']);

//examen 1 

use App\Http\Controllers\MensajeController;

Route::get('/mensaje/{nombre}', [MensajeController::class, 'mensajePersonalizado']);
Route::get('/mensaje-hora', [MensajeController::class, 'mensajeHora']);
Route::get('/saludo/{veces}', [MensajeController::class, 'saludoRepetido']);

