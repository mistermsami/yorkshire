<?php

namespace App\Livewire;

use App\Models\Teeth_Appointment;
use Livewire\Component;

class TeethAppintmentDetail extends Component
{
    public $appointmentId;
    public function render()
    {
        $appiontmentDetail = Teeth_Appointment::find($this->appointmentId);
        return view('livewire.teeth-appintment-detail', [
            'appiontmentDetail' => $appiontmentDetail,
        ]);
    }
}
