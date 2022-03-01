<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisagemController; // Acrescentei

Route::get('/paisagens', [PaisagemController::class, 'index']); // Rota principal onde vai aparecer os dados da Api

Route::post('/paisagens', [PaisagemController::class, 'store']); // Insere os dados da API no BD

Route::get('/paisagens/{id}', [PaisagemController::class, 'show']); // Retorna um registro pelo $id

Route::put('paisagens/{id}', [PaisagemController::class, 'update']); // Para editar um registro pelo $id
