<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product As pm;
class Product extends Controller
{
    //

    public function index(){
        $products = pm::with(['category' , 'condition' , 'set' , 'rarity' , 'inventory'])->paginate(9);
        return view('pages.productos' , ['products' => $products]);
    }

    public function getProduct($id){
        $product = pm::with(['category' , 'condition' , 'set' , 'rarity'])->find($id);
        $related =  $this->getRelatedProducts($product->set_id, $product->category_id);
        return view('pages.infoProducto', ['product' => $product , 'related' => $related]);
    }

    private function getRelatedProducts($set_id, $category_id){
        $products = pm::with(['category' , 'condition' , 'set' , 'rarity' , 'inventory'])->where('set_id' , $set_id)->where('category_id' , $category_id)->get();
        return $products->random(2);
    }

}
