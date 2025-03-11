<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormContacts extends Component{

    #[Validate('required|min:3|max:50')]
    public $name;
    #[Validate('required|email|max:50')]
    public $email;
    #[Validate('required|min:5|max:20')]
    public $phone;
    
    public $error = "";
    public $success = "";

    public function newContact(){
        //validation form
        $this->validate();

        //store contact in database
        $result = Contact::firstOrCreate(
            [
                'name'  => $this->name,
                'email' => $this->email,
            ],
            [
                'phone' => $this->phone
            ]
        );

        //check for success or error
        if ($result->wasRecentlyCreated) {
            //clear form
            $this->reset();
            
            //success message
            $this->success = "Contato criado com sucesso.";

            //create an event
            $this->dispatch('contactAdded');
            
        } else {
            //error message
            $this->error = "Erro ao criar Contato";
        }
        

    }

    public function render()
    {
        return view('livewire.form-contacts');
    }
}
