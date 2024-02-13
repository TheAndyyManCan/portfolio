<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProjectCreate extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $icon_url = '';

    public $url = '';

    #[Validate('required')]
    public $short_description = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('bool')]
    public $featured = false;

    public function store(){
        $this->validate();

        $attributes = [
            'title' => $this->title,
            'icon_url' => $this->icon_url,
            'url' => $this->url,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'featured' => $this->featured
        ];

        Project::create($attributes);

        return redirect('admin/project');
    }

    public function render()
    {
        return view('livewire.project-create');
    }
}
