<?php

namespace App\Livewire;

use App\Models\Prp_Appointment;
use Livewire\Component;

class PrpAppintmentDetail extends Component
{
    public $appointmentId;
    public function render()
    {
        $appiontmentDetail = Prp_Appointment::find($this->appointmentId);
        return view('livewire.prp-appintment-detail', [
            'appiontmentDetail' => $appiontmentDetail,
        ]);
    }
}
