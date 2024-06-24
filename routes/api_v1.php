<?php

use App\Http\Controllers\Api\V1\AuthorController;
use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\AuthorTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response('Hello, V1.');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('tickets', TicketController::class)->except('update');
    Route::put('/tickets/{ticket}', [TicketController::class, 'replace']);
    Route::patch('/tickets/{ticket}', [TicketController::class, 'update']);

    Route::apiResource('authors', AuthorController::class);

    Route::apiResource('authors.tickets', AuthorTicketController::class)->except('updat');
    Route::put('/authors/{authorId}/tickets/{ticket}', [AuthorTicketController::class, 'replace']);
    Route::patch('/authors/{authorId}/tickets/{ticket}', [AuthorTicketController::class, 'update']);
});
