<?php

namespace App\Livewire;

use Livewire\Component;

class Slideshow extends Component
{

    public $active = 0;

    public $activeClass = "block transition ease-in-out duration-300";
    public $inactiveClass = "hidden transition ease-in-out duration-300";
    public $heightAndWidthClass = "h-80 w-80";

    public $pictures = [];

    public function mount($pictures, $heightAndWidth){
        $this->$pictures = $pictures;
        $this->heightAndWidthClass = "h-" . $heightAndWidth . " w-" . $heightAndWidth . " ";
    }

    public function prev(){
        if($this->active == 0){
            $this->active = $this->pictures->count() - 1;
        } else {
            $this->active--;
        }
    }

    public function next(){
        if($this->active == $this->pictures->count() - 1){
            $this->active = 0;
        } else {
            $this->active++;
        }

    }

    public function placeholder(){
        return <<<'HTML'
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <g transform="rotate(0 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(30 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(60 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(90 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(120 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(150 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(180 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(210 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(240 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(270 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(300 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(330 50 50)">
              <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
              </rect>
            </g>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.slideshow');
    }
}
