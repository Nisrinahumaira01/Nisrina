<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/print_books', [App\Http\Controllers\AdminController::class, 'print_books'])
    ->name('admin.print.books')
    ->middleware('is_admin');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::get('/test', function(){
    return "Hello";
})->middleware('auth');

Route::get('admin/home', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

