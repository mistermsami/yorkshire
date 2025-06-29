<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\AppointmentStatus;

class Laser_Appointment extends Model
{
    protected $table = 'laser_appointment';
    protected $fillable = ['name', 'email', 'contact', 'date', 'appointment_type', 'time', 'message','status', 'paid', 'pirce']; // Fillable fields for mass assignment
    //
    protected $casts = [
        'status' => AppointmentStatus::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ]; 
}
