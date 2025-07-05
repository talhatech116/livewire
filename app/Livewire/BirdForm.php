<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;

class BirdForm extends Component
{   

    public int $bird_count;
    public string $notes;

    public function submit(){
        Entry::create([
            "bird_count" => $this->bird_count,
            "notes"=> $this->notes
        ]); 

        $this->reset();
    }

    public function render()
    {
        return view('livewire.bird-form');
    }
}
