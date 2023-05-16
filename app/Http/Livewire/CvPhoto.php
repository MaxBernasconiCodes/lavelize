<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CvPhoto extends Component
{

    public $photos = ['pf1.png', 'pf2.png', 'pf3.png'];
    public function render()
    {
        return view('livewire.cv-photo');
    }
}
