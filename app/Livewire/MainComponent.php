<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class MainComponent extends Component{
    #[Title('Agenda de Contatos')]
    public function render()
    {
        return view('livewire.main-component');
    }
}
