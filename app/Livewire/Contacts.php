<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component{

    use WithPagination;

    public string $search = '';
    private int $contactPerPage = 5;

    #[On('contactAdded')]
    public function updateContactList(){}

    public function render(){
        $contacts = null;
        if($this->search){
            $contacts = Contact::where('name', 'like', '%'.$this->search.'%')
                                ->orWhere('email', 'like', '%'.$this->search.'%')
                                ->orWhere('phone', 'like', '%'.$this->search.'%')
                                ->paginate($this->contactPerPage);
        }else{
            $contacts = Contact::paginate($this->contactPerPage);
        }

        return view('livewire.contacts')->with('contacts', $contacts);
    }
}
