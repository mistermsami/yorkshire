<?php

namespace App\Livewire;

use App\Models\Laser_Appointment;
use Livewire\Component;

class EditLaserAppintmentDetail extends Component
{
    public $appointmentId;
    public $name, $email, $contact, $date, $time, $appointment_type, $price, $paid, $message;

    public function mount()
    {
        $appointment = Laser_Appointment::findOrFail($this->appointmentId);

        $this->name = $appointment->name;
        $this->email = $appointment->email;
        $this->contact = $appointment->contact;
        $this->date = $appointment->date;
        $this->time = $appointment->time;
        $this->appointment_type = $appointment->appointment_type;
        $this->price = $appointment->pirce;
        $this->paid = $appointment->paid;
        $this->message = $appointment->message;
    }

    public function updateAppointment()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'appointment_type' => 'required|string',
            'price' => 'required|numeric',
            'paid' => 'required|numeric',
            'message' => 'nullable|string',
        ]);

        Laser_Appointment::where('id', $this->appointmentId)->update([
            'name' => $this->name,
            'email' => $this->email,
            'contact' => $this->contact,
            'date' => $this->date,
            'time' => $this->time,
            'appointment_type' => $this->appointment_type,
            'pirce' => $this->price,
            'paid' => $this->paid,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Appointment updated successfully!');
    }
    public function render()
    {
        return view('livewire.edit-laser-appintment-detail');
    }
}
