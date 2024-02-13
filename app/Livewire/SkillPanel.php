<?php

namespace App\Livewire;

use App\Models\Education;
use App\Models\Skill;
use Livewire\Component;

class SkillPanel extends Component
{
    public $item;
    public $showDescription = false;

    public function mount($id){
        $this->item = Skill::find($id);
    }

    public function toggleDescription(){
        $this->showDescription = !$this->showDescription;
    }

    public function render()
    {
        return view('livewire.skill-panel');
    }
}
