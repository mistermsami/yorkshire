<?php

namespace App\Models;

use App\Enums\ContactType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\AppointmentStatus;


class Appointment extends Model
{
    protected $table = 'appointment';
    
    protected $casts = [
        'status' => AppointmentStatus::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ]; 
    protected $fillable = ['name', 'email', 'contact', 'branch', 'contact_type', 'month', 'year', 'day', 'time','status', 'paid', 'pirce'];
    //  
}
