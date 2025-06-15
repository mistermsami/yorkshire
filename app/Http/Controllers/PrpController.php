<?php

namespace App\Http\Controllers;

use App\Models\Prp_Appointment;
use Illuminate\Http\Request;

class PrpController extends Controller
{
    public function index(){
        $hyderAppointments = Prp_Appointment::all();
        return view('dashboard.prp.index', compact('hyderAppointments'));
    }

    public function appointmentDetail($id){
        $appointment = Prp_Appointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.prp.detail', compact('appointment'));
    }
    public function editAppointmentDetail($id){
        $appointment = Prp_Appointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.prp.edit', compact('appointment'));
    }
}
