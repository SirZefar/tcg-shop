<?php

use Illuminate\Support\Facades\Route;

Route::get('/producto', function () {
    return view('pages.infoProducto');
})->name('producto');

Route::get('/', function(){
    return view('pages.home');
})->name('home');
