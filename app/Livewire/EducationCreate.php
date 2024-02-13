<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Education;

class EducationCreate extends Component
{

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $icon_url = '';

    #[Validate('required|integer')]
    public $start_year;

    #[Validate('required|integer')]
    public $end_year;

    #[Validate('required')]
    public $description = '';

    #[Validate('required')]
    public $qualification = '';

    #[Validate('required')]
    public $institution = '';

    public function store(){
        $this->validate();

        $attributes = [
            'title' => $this->title,
            'icon_url' => $this->icon_url,
            'start_year' => $this->start_year,
            'end_year' => $this->end_year,
            'description' => $this->description,
            'qualification' => $this->qualification,
            'institution' => $this->institution
        ];

        Education::create($attributes);

        return redirect('admin/education');
    }

    public function render()
    {
        return view('livewire.education-create');
    }
}
