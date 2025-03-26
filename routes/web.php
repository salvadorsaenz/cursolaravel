<?php

use App\Http\Controllers\CursoController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [CursoController::class, 'getName'])->name('home');

Route::get('/hola', function () {
    return 'Hola Mundo!';
})->name('hola');

Route::get('/sumar/{x}/{y}', [CursoController::class, 'getSuma'])->where([
    'x' => '[0-9]+',
    'y' => '[0-9]+',
]);

Route::get('/restar/{x}/{y}', [CursoController::class, 'getResta'])->where([
    'x' => '[0-9]+',
    'y' => '[0-9]+',
]);

Route::get('/multiplicar/{x}/{y}', [CursoController::class, 'getMultiplicar'])->where([
    'x' => '[0-9]+',
    'y' => '[0-9]+',
]);

Route::get('/dividir/{x}/{y}', [CursoController::class, 'getDivision'])->where([
    'x' => '[0-9]+',
    'y' => '[0-9]+',
]);

Route::get('/nombre/{name?}', function ($name = 'Juan') {
    return 'Su nombre es: ' . $name;
})->where('name', '[A-Za-z]+');

Route::redirect('/redirect', '/cursolaravel/example-app/public/hola', 301);

Route::prefix('admin')->group(function() {
    Route::get('/primero', function() {
        return 'Primero';
    });
});

# Realizar las funciones básicas resta, multiplicar y dividir
