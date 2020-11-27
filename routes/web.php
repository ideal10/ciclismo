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

Route::get('/', function () {
    return view('module0');
})->name('module0');

Route::middleware(['auth:sanctum', 'verified'])->get('/module0/menu0', function () {
    return view('module0.menu0');
})->name('module0/menu0');

Route::middleware(['auth:sanctum', 'verified'])->get('/module0/menu0/inscripciones', function () {
    return view('module0.menu0.inscripciones');
})->name('module0/menu0/inscripciones');

Route::middleware(['auth:sanctum', 'verified'])->get('/module0/menu0/ordensalida', function () {
    return view('module0.menu0.ordensalida');
})->name('module0/menu0/ordensalida');

Route::middleware(['auth:sanctum', 'verified'])->get('/module0/menu1', function () {
    return view('module0.menu1');
})->name('module0/menu1');
