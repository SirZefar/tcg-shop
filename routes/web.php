<?php

use Illuminate\Support\Facades\Route;

Route::get('/producto/{id}', function () {
    return view('pages.infoProducto');
})->name('producto');

Route::get('/', function(){
    return view('pages.home');
})->name('home');

Route::get('/productos', function(){
    return view('pages.productos');
});