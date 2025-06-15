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
        'subject' => 'required|min:3',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();

        Contact::create($validated);

        session()->flash('success', 'We will be in touch shortly to address your questions or concerns.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contactform.contact-form');
    }
}
