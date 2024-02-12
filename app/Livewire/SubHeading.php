<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SubHeading extends Component
{

    public $showContent = false;
    public $text = '';
    public $content;

    public function mount($text, $type){
        $this->text = $text;

        switch($type){
            case 'skills':
                $this->content = Skill::all();
                break;
        }
    }

    public function toggleContent(){
        $this->showContent = !$this->showContent;
    }

    public function render()
    {
        return view('livewire.sub-heading');
    }
}
