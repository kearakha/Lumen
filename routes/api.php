<?php

use App\Http\Controllers\AskController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::post('/ask', AskController::class);
Route::post('/documents', [DocumentController::class, 'store']);
