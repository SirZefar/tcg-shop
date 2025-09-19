<?php

use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages.home');
})->name('home');

Route::get('/productos' , [Product::class , 'index']);

Route::get('/producto/{id}', [Product::class, 'getProduct'])->name('producto');