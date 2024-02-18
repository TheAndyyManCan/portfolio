<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\FileUpload;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Createpost extends Component
{

    use WithFileUploads;

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

    #[Validate(['photos.*' => 'image|max:3072'])]
    public $photos = [];

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
        $post = Post::create($attributes);

        foreach($this->photos as $photo){
            $photo->store('photos');
            $fileAttributes = [
                'category_id' => $this->category_id,
                'project_id' => $this->project_id,
                'post_id' => $post->id,
                'url' => Storage::url($photo->getFilename())
            ];
            FileUpload::create($fileAttributes);
        }

        return redirect('/admin/post');
    }

    public function render()
    {
        return view('livewire.createpost');
    }
}
