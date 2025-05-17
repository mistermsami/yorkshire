<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hydra_Appointment extends Model
{
    protected $table = 'hydra_appointment';
    protected $fillable = ['name', 'email', 'contact', 'date', 'appointment_type', 'time', 'message', 'paid', 'pirce']; // Fillable fields for mass assignment
    //
    public $timestamps = true; // This ensures Laravel adds created_at and updated_at
}
