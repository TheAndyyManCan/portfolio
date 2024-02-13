<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectPanel extends Component
{

    public $showDescription = false;
    public $item;

    public function toggleDescription(){
        $this->showDescription = !$this->showDescription;
    }

    public function mount($id){
        $this->item = Project::find($id);
    }

    public function render()
    {
        return view('livewire.project-panel');
    }
}
