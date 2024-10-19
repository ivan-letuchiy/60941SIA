<?php

use App\Http\Controllers\FlatController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionOfTheMeetingController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello World!']);
});

Route::get('/house', [HouseController::class, 'index']);
Route::get('/house/{house_id}', [HouseController::class, 'show']);

Route::get('/flat', [FlatController::class, 'index']);
Route::get('/flat/{flat_id}', [FlatController::class, 'show']);

Route::get('owner/{owner_id}', [OwnerController::class, 'show']);
Route::get('/questionOfTheMeeting/{question_of_the_meeting_id}', [QuestionOfTheMeetingController::class, 'show']);
