<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('players/{player:slug}', [PlayerController::class, 'show'])->name('player.show');
