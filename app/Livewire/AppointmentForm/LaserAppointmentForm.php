<?php


namespace App\Livewire\AppointmentForm;

use App\Models\Laser_Appointment;
use Livewire\Component;

class LaserAppointmentForm extends Component
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
        $this->bookedTimes = Laser_Appointment::whereDate('date', $value)
                                        ->pluck('time')
                                        ->toArray();
    }
    public function save()
    {
        // dd($this->all());
        // Logic to store an appointment form 
        Laser_Appointment::create(
            $this->only(['name', 'email', 'contact', 'appointment_type', 'date', 'time', 'message'])
        );
        // Reset form fields after submission
        $this->reset();

        // Optionally, show a success messag 
        session()->flash('success', 'we will be in touch shortly to address your Appointment.');
    }
    public function render()
    {
        return view('livewire.appointmentform.laser-appointment-form');
    }
}  
