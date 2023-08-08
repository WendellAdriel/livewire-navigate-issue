<?php

namespace App\Livewire;

use Livewire\Component;

class Three extends Component
{
    public function render()
    {
        return view('livewire.three')->layout('layouts.dashboard');
    }
}
