<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hydra_Appointment; // Import the model

class HydraController extends Controller
{
    public function index(){
        $hyderAppointments = Hydra_Appointment::all();
        return view('dashboard.hydra.index', compact('hyderAppointments'));
    }

    public function appointmentDetail($id){
        $appointment = Hydra_Appointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.hydra.detail', compact('appointment'));
    }
}
