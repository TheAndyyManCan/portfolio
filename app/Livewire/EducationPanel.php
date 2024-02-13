<?php

namespace App\Livewire;

use App\Models\Education;
use Livewire\Component;

class EducationPanel extends Component
{

    public $item;
    public $showDescription = false;

    public function mount($id){
        $this->item = Education::find($id);
    }

    public function toggleDescription(){
        $this->showDescription = !$this->showDescription;
    }

    public function render()
    {
        return view('livewire.education-panel');
    }
}
