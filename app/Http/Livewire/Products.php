<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    protected $listeners = ['updateProducts'];
    public $products;

    public function mount($products)
    {
        $this->products = $products;
    }

    public function updateProducts($from, $to, $category_id)
    {
        $filters['from'] = $from;
        $filters['to'] = $to;
        $filters['category_id'] = $category_id;

        $products = Product::lang($filters);
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.products');
    }
}
