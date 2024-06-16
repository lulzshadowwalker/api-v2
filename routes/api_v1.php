<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response('Hello, V1.');
});

Route::apiResource('/tickets', TicketController::class);
Route::apiResource('/users', UserController::class);
