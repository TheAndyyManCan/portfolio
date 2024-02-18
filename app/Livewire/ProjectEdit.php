<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectEdit extends Component
{

    use WithFileUploads;

    public $project;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $icon_url = '';

    #[Validate('string')]
    public $url = '';

    #[Validate('required')]
    public $short_description = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required|bool')]
    public $featured = false;

    #[Validate('image|max:3027')]
    public $photo;

    public function mount($project){
        $this->project = $project;
        $this->title = $this->project->title;
        $this->icon_url = $this->project->icon_url;
        $this->url = $this->project->url;
        $this->short_description = $this->project->short_description;
        $this->description = $this->project->description;
        $this->featured = $this->project->featured == 1 ? true:false ;
    }

    public function edit(){
        $this->validate();
        $newPhoto = $this->photo->store();
        $attributes = [
            'title' => $this->title,
            'icon_url' => $this->icon_url,
            'url' => $this->url,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'featured' => $this->featured,
            'thumbnail' => $newPhoto
        ];

        $this->project->update($attributes);

        return redirect('admin/project');
    }

    public function delete(){
        $this->project->delete();
        return redirect('admin/project');
    }

    public function render()
    {
        return view('livewire.project-edit');
    }
}
