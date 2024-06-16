<?php

use App\Http\Controllers\Api\V1\AuthorController;
use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\AuthorTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response('Hello, V1.');
});

Route::apiResource('tickets', TicketController::class);
Route::apiResource('authors', AuthorController::class);
Route::apiResource('authors.tickets', AuthorTicketController::class);
