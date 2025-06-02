<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ALLAppointment extends Model
{
    protected $table = 'all_appointment';
    protected $fillable = ['name', 'email', 'contact', 'date', 'appointment_type', 'message', 'paid', 'pirce']; // Fillable fields for mass assignment
    //
     public $timestamps = true; // This ensures Laravel adds created_at and updated_at
}
