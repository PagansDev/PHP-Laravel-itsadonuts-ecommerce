<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\OrderController;

Route::namespace(value: 'Site')->group(function () {
    Route::get('/', [HomeController::class, '__invoke']);

    Route::get('/pedido', [OrderController::class, '__invoke']);
});
