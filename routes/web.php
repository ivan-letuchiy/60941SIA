<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello World!']);
});

Route::get('/houses', [HouseController::class, 'index']);
Route::get('/houses/{id}', [HouseController::class, 'show']);

Route::get('/meetings', [MeetingController::class, 'index']);
Route::get('/meetings/{id}', [MeetingController::class, 'show']);

// Маршрут для отображения владельца по ID
Route::get('/owners/{id}', [OwnerController::class, 'show'])->name('owners.show');

// Маршрут для отображения вопроса собрания по ID
Route::get('/questions/{id}', [QuestionController::class, 'show'])->name('questions.show');
