<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;

class BirdForm extends Component
{   
    #[Validate("required|integer")]
    public int $bird_count;

    #[Validate("required|string")]
    public string $notes;

    public function submit(){
        Entry::create([
            "bird_count" => $this->bird_count,
            "notes"=> $this->notes
        ]); 

        $this->reset();
    }

    
    public function delete($id)
    {
        Entry::find($id)?->delete();
        $this->enteries = Entry::all(); // Refresh the list after deletion
    }

    public function render()
    {
        return view('livewire.bird-form', [
            'enteries' => Entry::all(),
        ]);
    }
}
