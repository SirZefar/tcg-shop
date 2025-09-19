<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product As pm;
class Product extends Controller
{
    //

    public function index(){
        $products = pm::with(['category' , 'condition' , 'set' , 'rarity'])->paginate(9);

        return view('pages.productos' , ['products' => $products]);
    }

    public function getProduct($id){
        $product = pm::with(['category' , 'condition' , 'set' , 'rarity'])->find($id);

        return view('pages.infoProducto', ['product' => $product]);
    }
}
