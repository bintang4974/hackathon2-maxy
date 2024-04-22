<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AgendaController;

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
    return view('layouts.app');
});

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/agendas', [AgendaController::class, 'index'])->name('agendas.index');
Route::get('/agendas/create', [AgendaController::class, 'create'])->name('agendas.create');
Route::post('/agendas', [AgendaController::class, 'store'])->name('agendas.store');
Route::get('/agendas/{agenda}', [AgendaController::class, 'show'])->name('agendas.show');
Route::get('/agendas/{agenda}/edit', [AgendaController::class, 'edit'])->name('agendas.edit');
Route::put('/agendas/{agenda}', [AgendaController::class, 'update'])->name('agendas.update');
Route::delete('/agendas/{agenda}', [AgendaController::class, 'destroy'])->name('agendas.destroy');
