<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\AppointmentStatus;

class ALLAppointment extends Model
{
    protected $table = 'all_appointment';
    protected $fillable = ['name', 'email', 'contact', 'date', 'appointment_type', 'message', 'paid', 'pirce', 'status']; // Fillable fields for mass assignment
    //
    protected $casts = [
        'status' => AppointmentStatus::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ]; 
}
