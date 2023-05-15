<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CvPhoto extends Component
{

    public $photos = ['pf1.png', 'pf2.png', 'pf3.png'];
    public $selectedPath ='';
    public $selectedPhoto = 0;


    public function mount(){
        $this->selectPhoto();
    }

    public function render()
    {
        return view('livewire.cv-photo');
    }

    public function selectPhoto()
    {
        $rand = random_int(0, count($this->photos) - 1);
        if ($rand == $this->selectedPhoto) {
            $this->selectPhoto();
        }
        else {
            $this->emit('imageChanged');
            $this->selectedPhoto = $rand;
            $this->selectedPath = asset('storage/'.$this->photos[$rand]);
        }
    }
}
