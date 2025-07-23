<?php

namespace App\Http\Controllers;

use App\Models\Teeth_Appointment;
use Illuminate\Http\Request;

class TeethController extends Controller
{
    public function index(){
        $TeethAppointments = Teeth_Appointment::all();
        return view('dashboard.teeth.index', compact('TeethAppointments'));
    }

    public function appointmentDetail($id){
        $appointment = Teeth_Appointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.teeth.detail', compact('appointment'));
    }
    public function editAppointmentDetail($id){
        $appointment = Teeth_Appointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.teeth.edit', compact('appointment'));
    }
}
