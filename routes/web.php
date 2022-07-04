<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DoctorController;

Route::get('/insert', [DoctorController::class,"insert"]);
Route::get('/update', [DoctorController::class,"update"]);
// Route::get('/remove', [ArticleController::class,"delete"]);


Route::get('/', function () {
    return view('welcome');
});
