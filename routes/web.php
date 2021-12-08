<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->middleware('auth');

Route::get('/my-exhibitions', [BookController::class, 'myExhibitions'])->middleware('auth');


Route::get('/book/{id}', [BookController::class, 'show']);

Route::delete('/book/delete/{id}', [BookController::class, 'destroy']);

Route::post('/addbook/publish', [BookController::class, 'store']);


Route::get('/addbook', function() {
    return view('addBook');
});

