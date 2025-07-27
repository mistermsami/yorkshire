<?php
namespace App\Livewire\AppointmentForm;
use Livewire\Component;  
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\ALLAppointment;

class HomeApointmentForm extends Component
{
    public $name;
    public $email;
    public $contact;
    public $appointment_type;
    public $date; 
    public $message = 'No message provided'; // Default message value
 
    public function save()
    {
        // dd($this->all());
        // Logic to store an appointment form 
        $emailform = AllAppointment::create(
            attributes: $this->only(['name', 'email', 'contact', 'appointment_type', 'date', 'message'])
        );
        Mail::to($this->email)->send(new ContactSubmitted($emailform, '2')); 
        // Reset form fields after submission
        $this->reset();

        // Optionally, show a success messag 
        session()->flash('success', 'we will be in touch shortly to address your Appointment.');
    }
    public function render()
    {
        return view('livewire.appointmentform.home-apointment-form');
    }
}
