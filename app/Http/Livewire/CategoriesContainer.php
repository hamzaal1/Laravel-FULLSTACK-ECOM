<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categories;

class CategoriesContainer extends Component
{
    public $categories;
    public function mount(){
        $this->categories = Categories::tree()->get()->toTree();
// 
    }
    public function render()
    {
        return view('livewire.categories-container');
    }
}
