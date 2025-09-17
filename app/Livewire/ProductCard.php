<?php

namespace App\Livewire;

use Livewire\Component;

class ProductCard extends Component
{

    public $id;
    public $nombre;
    public $rareza;
    public $categoria;
    public $price;
    public $productImg;
    
    public function addToFav(){
        return $this->id;
    }

    public function addToCart(){
        return $this->id;
    }

    public function render()
    {
        return view('livewire.product-card');
    }

}
