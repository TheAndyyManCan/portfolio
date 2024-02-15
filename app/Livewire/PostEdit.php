<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PostEdit extends Component
{

    public $post;
    public $categories;
    public $projects;

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

    public function mount($categories, $projects, $id){
        $this->categories = $categories;
        $this->projects = $projects;
        $this->post = Post::find($id);
        $this->category_id = $this->post->category_id;
        $this->project_id = $this->post->project_id;
        $this->title = $this->post->title;
        $this->description = $this->post->description;
        $this->content = $this->post->content;
    }

    public function edit(){
        $this->validate();
        $attributes = [
            'category_id' => $this->category_id,
            'project_id' => $this->project_id,
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content
        ];

        $this->post->update($attributes);
        return redirect('admin/post');
    }

    public function render()
    {
        return view('livewire.post-edit');
    }
}
