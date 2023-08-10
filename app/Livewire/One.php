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

    public function redirectTwoWithSession()
    {
        session()->regenerate();

        $this->redirect('/two');
    }

    public function redirectTwoNavigateWithSession()
    {
        session()->regenerate();

        $this->redirect('/two', true);
    }

    public function redirectRouteTwoWithSession()
    {
        session()->regenerate();

        $this->redirectRoute('two');
    }

    public function render()
    {
        return view('livewire.one')->layout('layouts.app');
    }
}
