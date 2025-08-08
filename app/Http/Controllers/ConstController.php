<?php

namespace App\Http\Controllers;

use App\Models\ALLAppointment;
use Illuminate\Http\Request;

class ConstController extends Controller
{
    public function index(){
        $ConstAppointments = ALLAppointment::all();
        return view('dashboard.const.index', compact('ConstAppointments'));
    }

    public function appointmentDetail($id){
        $appointment = ALLAppointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.const.detail', compact('appointment'));
    }
    public function editAppointmentDetail($id){
        $appointment = ALLAppointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.const.edit', compact('appointment'));
    }
}
