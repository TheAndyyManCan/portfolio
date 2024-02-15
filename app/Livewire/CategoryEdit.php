<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoryEdit extends Component
{

    public $category;

    #[Validate('required')]
    public $title = '';

    public function mount($id){
        $this->category = Category::find($id);
        $this->title = $this->category->title;
    }

    public function edit(){
        $this->validate();
        $attributes = [
            'title' => $this->title
        ];
        $this->category->update($attributes);
        return redirect('admin/category');
    }

    public function render()
    {
        return view('livewire.category-edit');
    }
}
