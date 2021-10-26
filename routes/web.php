<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home', ['nombre' => 'Hernan'])->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessagesController@store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
