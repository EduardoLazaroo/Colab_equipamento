<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blocks', 
    [BlockController::class, 'index']
)->middleware(['auth'])->name('blocks');

Route::get('/equipamentos', 'App\Http\Controllers\EquipamentoController@index')->
middleware(['auth'])->name('equipamentos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
