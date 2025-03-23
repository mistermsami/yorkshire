<?php

namespace App\Livewire\ContactForm; 
use App\Models\Customer;
use Livewire\Component; 
class ContactForm extends Component
{
    public function render()
    {
        return view('livewire.contactfrom.contact-form');
    }
}
