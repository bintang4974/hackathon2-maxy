<?php

use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\SpeakerController;

use App\Http\Controllers\EventRegistrationController;
use App\Http\Controllers\EventUserController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('position', PositionController::class);


    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::resource('position', PositionController::class);
Route::resource('speaker', SpeakerController::class);


    Route::get('/events/register/{eventId}', [EventRegistrationController::class, 'register'])->name('events.register');


    Route::get('/agendas', [AgendaController::class, 'index'])->name('agendas.index');
    Route::get('/agendas/create', [AgendaController::class, 'create'])->name('agendas.create');
    Route::post('/agendas', [AgendaController::class, 'store'])->name('agendas.store');
    Route::get('/agendas/{agenda}', [AgendaController::class, 'show'])->name('agendas.show');
    Route::get('/agendas/{agenda}/edit', [AgendaController::class, 'edit'])->name('agendas.edit');
    Route::put('/agendas/{agenda}', [AgendaController::class, 'update'])->name('agendas.update');
    Route::delete('/agendas/{agenda}', [AgendaController::class, 'destroy'])->name('agendas.destroy');

    Route::get('/speakers', [SpeakerController::class, 'index'])->name('speakers.index');
    Route::get('/speakers/create', [SpeakerController::class, 'create'])->name('speakers.create');
    Route::post('/speakers', [SpeakerController::class, 'store'])->name('speakers.store');
    Route::get('/speakers/{speaker}', [SpeakerController::class, 'show'])->name('speakers.show');
    Route::get('/speakers/{speaker}/edit', [SpeakerController::class, 'edit'])->name('speakers.edit');
    Route::put('/speakers/{speaker}', [SpeakerController::class, 'update'])->name('speakers.update');
    Route::delete('/speakers/{speaker}', [SpeakerController::class, 'destroy'])->name('speakers.destroy');

    Route::get('/event_users', [EventUserController::class, 'index'])->name('event_users.index');
    Route::get('/event_users/{id}', [EventUserController::class, 'show'])->name('event_users.show');
    Route::get('/event_users/{id}/edit', [EventUserController::class, 'edit'])->name('event_users.edit');
    Route::put('/event_users/{id}', [EventUserController::class, 'update'])->name('event_users.update');
    Route::delete('/event_users/{id}', [EventUserController::class, 'destroy'])->name('event_users.destroy');
    Route::patch('/event_users/{id}/update-payment-status', [EventUserController::class, 'updatePaymentStatus'])->name('event_users.updatePaymentStatus');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('layouts.template');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
