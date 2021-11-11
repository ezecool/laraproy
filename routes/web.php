<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home', ['nombre' => 'Hernan'])->name('home');
Route::view('/about', 'about')->name('about');


// Rutas rest para proyectos //
//Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
//Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');
//Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');
//Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
//Route::put('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
//Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);

// Rutas de contacto //
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('messages.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

?>
