<?php

namespace App\Livewire\AppointmentForm;

use Livewire\Component;
use App\Models\Teeth_Appointment;

class TeethAppointmentForm extends Component
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
        $this->bookedTimes = Teeth_Appointment::whereDate('date', $value)
            ->pluck('time')
            ->toArray();
    }
    public function save()
    {
        // dd($this->all());
        // Logic to store an appointment form 
        Teeth_Appointment::create(
            $this->only(['name', 'email', 'contact', 'appointment_type', 'date', 'time', 'message'])
        );
        // Reset form fields after submission
        $this->reset();

        // Optionally, show a success messag 
        session()->flash('success', 'we will be in touch shortly to address your Appointment.');
    }
    public function render()
    {
        return view('livewire.appointmentform.teeth-appointment-form');
    }
}
