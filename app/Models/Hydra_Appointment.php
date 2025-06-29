<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\AppointmentStatus;

class Hydra_Appointment extends Model
{
    protected $table = 'hydra_appointment';
    protected $fillable = ['name', 'email', 'contact', 'date', 'appointment_type', 'time', 'message', 'paid', 'pirce', 'status']; // Fillable fields for mass assignment
    //
    protected $casts = [
        'status' => AppointmentStatus::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function getStatusLabelAttribute(): string
    {
        return \App\Enums\AppointmentStatus::from($this->status)->label();
    }
}
