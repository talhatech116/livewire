<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{
    public function sendMessage()
    {
        // Correct way to dispatch global event
        $this->dispatch('messageSent');
    }

    public function render()
    {
        return view('livewire.send-event');
    }
}
