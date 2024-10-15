<?php

use App\Http\Controllers\FileContoroller;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


Route::get('/', function () {
    return view('welcome');
    
});
//levélküldés
Route::get('send-mail', [MailController::class, 'index']);

//fájl feltöltés
Route::get('file-upload', [FileContoroller::class, 'index']);
Route::post('file-upload', [FileContoroller::class, 'store'])->name('file.store');
