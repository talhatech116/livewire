<?php

namespace App\Livewire;

use Livewire\Component;

class Lazy extends Component
{

    public function mount(){
        sleep(3);
    }

    public function render()
    {
        return view('livewire.lazy');
    }
}
