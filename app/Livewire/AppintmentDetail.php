<?php

namespace App\Livewire;

use App\Models\Hydra_Appointment;
use Livewire\Component;

class AppintmentDetail extends Component
{
    public $appointmentId;
    public function render()
    {
        $appiontmentDetail = Hydra_Appointment::find($this->appointmentId);
        return view('livewire.appintment-detail', [
            'appiontmentDetail' => $appiontmentDetail,
        ]);
    }
}
