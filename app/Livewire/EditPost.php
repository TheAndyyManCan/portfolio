<?php

namespace App\Livewire;

use App\Models\FileUpload;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $title;

    public $icon_url;

    #[Validate('required|integer')]
    public $years_of_experience;

    #[Validate('required')]
    public $description;

    #[Validate('image')]
    public $photo;

    public $skill;

    public function mount($skill){
        $this->skill = $skill;
        $this->title = $this->skill->title;
        $this->icon_url = $this->skill->icon_url;
        $this->years_of_experience = $this->skill->years_of_experience;
        $this->description = $this->skill->description;
    }

    public function edit(){
        $this->validate();
        $newPhoto = $this->photo->store();
        $attributes = [
            'title' => $this->title,
            'icon_url' => $this->icon_url,
            'years_of_experience' => $this->years_of_experience,
            'description' => $this->description,
            'thumbnail' => $newPhoto
        ];
        $this->skill->update($attributes);

        return redirect('admin/skills');
    }

    public function delete(){
        $this->skill->delete();
        return redirect('admin/skills');
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
