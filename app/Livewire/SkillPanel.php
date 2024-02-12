<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillPanel extends Component
{
    public $skill;
    public $showDescription = false;

    public function mount($id){
        $this->skill = skill::find($id);
    }

    public function toggleDescription(){
        $this->showDescription = !$this->showDescription;
    }

    public function render()
    {
        return view('livewire.skill-panel');
    }
}
