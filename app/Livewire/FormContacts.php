<?php

namespace App\Livewire;

use Livewire\Component;

class FormContacts extends Component{

    public $name, $email, $phone;

    public function newContact(){
        //validation form
        $this->validate([
            'name'   => 'required|min:3|max:50',
            'email'  => 'required|email|max:50',
            'phone'  => 'required|min:5|max:20',
        ]);
    }

    public function render()
    {
        return view('livewire.form-contacts');
    }
}
