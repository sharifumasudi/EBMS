<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryCreate extends Component
{
    public Category $category_model;

    public $category_name, $description;

    protected $rules = [
        'category_name' => 'required|max:100',
        'description' => 'required|max:200',
    ];

    protected $messages = [
        'category_name.required' => 'Category Name Is Required',
        'category_name.max' => 'Category Name Is Too Long',
        'description.required' => 'Category Description Name Is Required',
        'description.max' => 'Category Description Name Is Too Long',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function mount()
    {
        $this->category_model = $category_model ?? new Category();
    }

    public function saveCategiry()
    {
        $validate = $this->validate();

        if($validate)
        {
            $this->resetErrorBag();

            DB::beginTransaction();

            $store = $this->category_model->createCategory($this->inputField());

            if($store)
            {
                $this->resetInput(); // reset Input Fields

                DB::commit();

                sleep(2);

                session()->flash('message', 'Successfully Category name Saved');

                return redirect()->route('admin.cates.index');
            }
        }
    }

    public function inputField()
    {
        return [
            'category_name' => htmlspecialchars(trim(ucwords($this->category_name))),
            'description' => htmlspecialchars(trim(ucwords($this->description))),
        ];
    }

    public function resetInput()
    {
        $this->category_name = '';

        $this->description = '';
    }

    public function render()
    {
        return view('livewire.category.category-create');
    }
}
