<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index'])->name('home');

Route::get('/productos' , [Product::class , 'index']);

Route::get('/producto/{id}', [Product::class, 'getProduct'])->name('producto');

Route::get('/profile' , function (){
    return view('pages.profile');
});