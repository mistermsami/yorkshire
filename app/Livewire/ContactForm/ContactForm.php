<?php

namespace App\Livewire\ContactForm;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    { 
        $this->validate();

        // Logic to register the user 
        Contact::create(
            $this->only(['name', 'email', 'subject', 'message'])
        );

        session()->flash('success', 'we will be in touch shortly to address your questions or concerns.');

        // Reset the form fields
        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function render()
    {
        // dd('hello');
        return view('livewire.contactform.contact-form');
    }
}
