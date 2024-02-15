<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Createpost extends Component
{

    public $projects;
    public $categories;

    #[Validate('required')]
    public $title = '';

    #[Validate('string')]
    public $description = '';

    #[Validate('required|min:3')]
    public $content = '';

    #[Validate('required|int')]
    public $category_id = null;

    #[Validate('int|nullable')]
    public $project_id = null;

    public function mount($categories, $projects){
        $this->projects = $projects;
        $this->categories = $categories;
    }

    public function store(){
        $this->validate();
        $attributes = [
            'category_id' => $this->category_id,
            'project_id' => $this->project_id,
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content
        ];
        Post::create($attributes);
        return redirect('/admin/post');
    }

    public function render()
    {
        return view('livewire.createpost');
    }
}
