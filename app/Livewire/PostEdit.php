<?php

namespace App\Livewire;

use App\Models\FileUpload;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostEdit extends Component
{

    use WithFileUploads;

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

    #[Validate(['photos.*' => 'image|max:3072'])]
    public $photos = [];

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

        foreach($this->photos as $photo){
            $newPhoto = $photo->store();
            $fileAttributes = [
                'category_id' => $this->category_id,
                'project_id' => $this->project_id,
                'post_id' => $this->post->id,
                'skill_id' => null,
                'url' => $newPhoto
            ];
            FileUpload::create($fileAttributes);
        }

        $this->post->update($attributes);
        return redirect('admin/post');
    }

    public function delete(){
        $this->post->delete();
        return redirect('admin/post');
    }

    public function render()
    {
        return view('livewire.post-edit');
    }
}
