<?php

namespace App\Livewire;

use App\Models\ALLAppointment;
use Livewire\Component;

class ConstAppointmentDetail extends Component
{
    public $appointmentId;
    public function render()
    {
        $appiontmentDetail = AllAppointment::find($this->appointmentId);
        return view('livewire.const-appintment-detail', [
            'appiontmentDetail' => $appiontmentDetail,
        ]);
    }
}
