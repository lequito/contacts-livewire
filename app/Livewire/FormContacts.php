<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class FormContacts extends Component{

    #[Validate('required|min:3|max:50')]
    public $name;
    #[Validate('required|email|max:50')]
    public $email;
    #[Validate('required|min:5|max:20')]
    public $phone;
    

    public function newContact(){
        //validation form
        $this->validate();

        //clear form
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-contacts');
    }
}
