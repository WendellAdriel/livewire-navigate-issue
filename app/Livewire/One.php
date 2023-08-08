<?php

namespace App\Livewire;

use Livewire\Component;

class One extends Component
{
    public function redirectTwo()
    {
        $this->redirect('/two');
    }

    public function redirectTwoNavigate()
    {
        $this->redirect('/two', true);
    }

    public function redirectRouteTwo()
    {
        $this->redirectRoute('two');
    }

    public function redirectThree()
    {
        $this->redirect('/three');
    }

    public function redirectThreeNavigate()
    {
        $this->redirect('/three', true);
    }

    public function redirectRouteThree()
    {
        $this->redirectRoute('three');
    }

    public function render()
    {
        return view('livewire.one')->layout('layouts.app');
    }
}
