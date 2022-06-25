<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

use App\Models\Category;

class CategoryList extends Component
{

    public Category $categories;

    public $cates; // data

    public function mount()
    {
        $this->categories = $categories ?? new Category();

        $this->cates = $this->categories->displayCategory();

    }
    public function render()
    {
        // dd($this->cates);
        return view('livewire.category.category-list');
    }
}
