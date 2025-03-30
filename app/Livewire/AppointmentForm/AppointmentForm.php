<?php

namespace App\Livewire\AppointmentForm;

use App\Models\Appointment;
use Livewire\Component;

class AppointmentForm extends Component
{

    public $name;
    public $email;
    public $contact;
    public $branch;
    public $contact_type;
    public $month;
    public $year;
    public $day;
    public $time;
    protected $listeners = ['updateDay' => 'setDay'];

    public function setDay($selectedDay)/* This listens for the event from Livewire.dispatch */
    {
        $this->day = $selectedDay;
    }
    public function save()
    {
        // dd($this->all());
        // Logic to store an appointment form 
        Appointment::create(
            $this->only(['name', 'email', 'contact', 'branch', 'contact_type', 'month', 'year', 'day', 'time'])
        );
        // Reset form fields after submission
        $this->reset();

        // Send event to JavaScript to reset stepper
        $this->dispatch('resetStepper');

        // Optionally, show a success messag 
        session()->flash('success', 'we will be in touch shortly to address your Appointment.');
    }
    public function render()
    {
        return view('livewire.appointmentform.appointment-form');
    }
}
