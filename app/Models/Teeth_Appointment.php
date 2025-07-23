<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\AppointmentStatus;

class Teeth_Appointment extends Model
{
    //
    protected $table = 'teeth_appointment';
    protected $fillable = ['name', 'email', 'contact', 'date', 'appointment_type', 'time', 'message','status', 'paid', 'pirce'];
    
    protected $casts = [
        'status' => AppointmentStatus::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ]; 
}
