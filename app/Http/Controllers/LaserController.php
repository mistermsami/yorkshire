<?php

namespace App\Http\Controllers;

use App\Models\Laser_Appointment;
use Illuminate\Http\Request;

class LaserController extends Controller
{
    public function index(){
        $laserAppointments = Laser_Appointment::all();
        return view('dashboard.laser.index', compact('laserAppointments'));
    }

    public function appointmentDetail($id){
        $appointment = Laser_Appointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.laser.detail', compact('appointment'));
    }
    public function editAppointmentDetail($id){
        $appointment = Laser_Appointment::findOrFail($id);
        // dd($appointment);
        return view('dashboard.laser.edit', compact('appointment'));
    }
}
