<?php

namespace App\Livewire\ContactForm;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;

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

        $contact = Contact::create($validated); // assign to $contact
        dd($contact); // Debugging line to check the contact data
        Mail::to($this->email)->send(new ContactSubmitted($contact)); 
        session()->flash('success', 'We will be in touch shortly to address your questions or concerns.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contactform.contact-form');
    }
}
