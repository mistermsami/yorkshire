<?php

namespace App\Livewire;

use App\Models\Laser_Appointment;
use Livewire\Component;

class LaserAppintmentDetail extends Component
{
    public $appointmentId;
    public function render()
    {
        $appiontmentDetail = Laser_Appointment::find($this->appointmentId);
        return view('livewire.laser-appintment-detail', [
            'appiontmentDetail' => $appiontmentDetail,
        ]);
    }
}
