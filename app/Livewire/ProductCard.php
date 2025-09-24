<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ProductCard extends Component
{

    public $productId;
    public $nombre;
    public $rareza;
    public $categoria;
    public $price;
    public $productImg;
    
    public function addToFav(){
        return $this->productId;
    }

    public function addToCart(){
        return $this->productId;
    }

    public function render()
    {
        return view('livewire.product-card');
    }

}
