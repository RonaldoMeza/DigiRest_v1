<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Productos - DigiRest')]

class ProductsPage extends Component
{
    use WithPagination;  // para usar Paginate.

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $stock=1; // 1 = Disponible, 0 = No disponible

    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);  // Consulta a la base de datos, que productos están activos.

        if (!empty($this->selected_categories)) {
            $productQuery->whereIn('category_id', $this->selected_categories); // Filtrar productos por categorías seleccionadas.
        }

        // usa == para que “1” y “0” (strings) funcionen bien
        if ($this->stock == 1) {
            $productQuery->where('in_stock', 1);
        } elseif ($this->stock == 0) {
            $productQuery->where('in_stock', 0);
        }

        // Ordenar los productos por el campo 'order' de forma ascendente.
        //$productQuery->orderBy('order', 'asc');
        
        return view('livewire.products-page', [
            'products' => $productQuery->paginate(6), // Para la cantidad de elementos(productos) que se mostraran en cada página. 
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
