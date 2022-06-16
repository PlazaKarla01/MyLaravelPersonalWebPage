<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function()

{

    return View::make('pages.home');

});

Route::get('/contact', function()

{

    return View::make('pages.contact');

});

Route::get('/about', function()

{

    return View::make('pages.about');

});

Route::get('/cs202', function()

{

    return View::make('pages.cs202');

});

Route::get('/laravel', function()

{

    return View::make('pages.laravel');

});

Route::get('/career', function()

{

    return View::make('pages.career');

});
