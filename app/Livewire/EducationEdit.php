<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class EducationEdit extends Component
{

    public $education;

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

    public function mount($education){
        $this->education = $education;
        $this->title = $this->education->title;
        $this->icon_url = $this->education->icon_url;
        $this->start_year = $this->education->start_year;
        $this->end_year = $this->education->end_year;
        $this->description = $this->education->description;
        $this->qualification = $this->education->qualification;
        $this->institution = $this->education->institution;
    }

    public function edit(){
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

        $this->education->update($attributes);

        return redirect('admin/education');
    }

    public function render()
    {
        return view('livewire.education-edit');
    }
}
