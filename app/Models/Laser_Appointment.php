<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laser_Appointment extends Model
{
    protected $table = 'laser_appointment';
    protected $fillable = ['name', 'email', 'contact', 'date', 'appointment_type', 'time', 'message'];
    //
    public $timestamps = true; // This ensures Laravel adds created_at and updated_at
}
