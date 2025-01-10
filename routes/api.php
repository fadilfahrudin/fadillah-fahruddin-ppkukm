<?php

use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\PesertaController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\PesertaEventController;
use Illuminate\Support\Facades\Route;

Route::get('/peserta', [PesertaController::class, 'index']);
Route::get('/peserta-event', [PesertaEventController::class, 'index']);
Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);
Route::get('/top-event', [EventController::class, 'topEvent']);
