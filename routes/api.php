<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisagemController; // Acrescentei

Route::get('/paisagens', [PaisagemController::class, 'index']); // Rota principal onde vai aparecer os dados da Api
