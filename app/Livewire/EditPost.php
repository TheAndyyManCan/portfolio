<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class EditPost extends Component
{

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $icon_url;

    #[Validate('required|integer')]
    public $years_of_experience;

    #[Validate('required')]
    public $description;

    public $skill;

    public function mount($skill){
        $this->skill = $skill;
        $this->title = $this->skill->title;
        $this->icon_url = $this->skill->icon_url;
        $this->years_of_experience = $this->skill->years_of_experience;
        $this->description = $this->skill->description;
    }

    public function edit(){
        $attributes = [
            'title' => $this->title,
            'icon_url' => $this->icon_url,
            'years_of_experience' => $this->years_of_experience,
            'description' => $this->description
        ];

        $this->skill->update($attributes);

        return redirect('admin/skills');
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
