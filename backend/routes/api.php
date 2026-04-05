<?php

use App\Http\Controllers\CakeController;
use App\Http\Controllers\FlavourController;
use Illuminate\Support\Facades\Route;

Route::get('/cakes', [CakeController::class, 'index']);
Route::get('/cakes/{id}', [CakeController::class, 'show']);

Route::get('/flavours', [FlavourController::class, 'index']);
Route::get('/flavours/{id}', [FlavourController::class, 'show']);

?>