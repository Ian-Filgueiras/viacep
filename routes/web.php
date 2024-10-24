<?php

use App\Http\Controllers\ViaCepController;
use Illuminate\Support\Facades\Route;

Route::get('/cep/{cep}', [ViaCepController::class, 'getCep']);
