<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'HELLO WORLD';
});

use App\Http\Controllers\HelloController; 


Route::get('/', [HelloController::class, 'coucou']); 
Route::get('/accueil', [HelloController::class, 'Bienvenue']); 

use App\Http\Controllers\ClientController; 
Route::resource('/clients', ClientController::class); 
