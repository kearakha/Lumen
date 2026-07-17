<?php

use App\Http\Controllers\AskController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::post('/ask', [AskController::class, 'store']);
Route::get('/ask/{askId}/stream', [AskController::class, 'stream']);
Route::post('/documents', [DocumentController::class, 'store']);
