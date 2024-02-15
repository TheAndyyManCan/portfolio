<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryCreate extends Component
{

    #[Validate('required')]
    public $title = '';

    public function store(){
        $this->validate();
        $attributes = [
            'title' => $this->title
        ];

        Category::create($attributes);
        return redirect('/admin/category');
    }

    public function render()
    {
        return view('livewire.category-create');
    }
}
