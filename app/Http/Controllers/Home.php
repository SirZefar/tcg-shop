<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class Home extends Controller
{
    //

    public function index(){
        $brandNew = Product::with(['set' , 'rarity' , 'category', 'condition'])->where('status', 1)->limit(4)->orderBy('created_at' , 'DESC')->get();
        $notables = Product::with(['set' , 'rarity' , 'category', 'condition'])->where('product_type' , '!=' , 'Carta')->limit(4)->get();
        return view('pages.home' , ['new_brandes' => $brandNew , 'notables' => $notables]);
    }
}
