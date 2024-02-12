<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SkillCreate extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $icon_url = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required|integer')]
    public $years_of_experience = 0;

    public function store(){
        $this->validate();
        $attributes = [
            'title' => $this->title,
            'icon_url' => $this->icon_url,
            'description' => $this->description,
            'years_of_experience' => $this->years_of_experience
        ];

        Skill::create($attributes);

        return redirect('/admin/skills');
    }

    public function render()
    {
        return view('livewire.skill-create');
    }
}
