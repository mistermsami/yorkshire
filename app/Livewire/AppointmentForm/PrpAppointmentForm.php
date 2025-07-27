<?php
 
namespace App\Livewire\AppointmentForm;
use Livewire\Component;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Prp_Appointment;   

class PrpAppointmentForm extends Component
{
    public $name;
    public $email;
    public $contact;
    public $appointment_type;
    public $date;
    public $time;
    public $message;
    public $bookedTimes = []; 
    public function updatedDate($value)
    {
        // Fetch booked times for the selected date
        $this->bookedTimes = Prp_Appointment::whereDate('date', $value)
                                        ->pluck('time')
                                        ->toArray();
    }
    public function save()
    {
        // dd($this->all());
        // Logic to store an appointment form 
        $emailform = Prp_Appointment::create(
            $this->only(['name', 'email', 'contact', 'appointment_type', 'date', 'time', 'message'])
        );
        // Reset form fields after submission
        Mail::to($this->email)->send(new ContactSubmitted($emailform, '2'));
        // Reset form fields after submission
        $this->reset();

        // Optionally, show a success messag 
        session()->flash('success', 'we will be in touch shortly to address your Appointment.');
    }
    public function render()
    {
        return view('livewire.appointmentform.prp-appointment-form');
    }
}  
