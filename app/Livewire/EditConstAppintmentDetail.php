<?php

namespace App\Livewire;

use App\Models\ALLAppointment;
use Livewire\Component;

class EditConstAppintmentDetail extends Component
{
    public $appointmentId;
    public $name, $email, $contact, $date, $time, $appointment_type, $price, $paid, $message, $status;

    public function mount()
    {
        $appointment = ALLAppointment::findOrFail($this->appointmentId);

        $this->name = $appointment->name;
        $this->email = $appointment->email;
        $this->contact = $appointment->contact;
        $this->date = $appointment->date; 
        $this->appointment_type = $appointment->appointment_type;
        $this->price = $appointment->pirce;
        $this->paid = $appointment->paid;
        $this->status = $appointment->status;
        $this->message = $appointment->message;
    }

    public function updateAppointment()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required',
            'date' => 'required|date', 
            'appointment_type' => 'required|string',
            'price' => 'required|numeric',
            'paid' => 'required|numeric',
            'message' => 'nullable|string',
        ]);

        ALLAppointment::where('id', $this->appointmentId)->update([
            'name' => $this->name,
            'email' => $this->email,
            'contact' => $this->contact,
            'date' => $this->date, 
            'appointment_type' => $this->appointment_type,
            'pirce' => $this->price,
            'paid' => $this->paid,
            'status' => $this->status,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Appointment updated successfully!');
    }

    public function render()
    {
        return view('livewire.edit-const-appintment-detail');
    }
}
