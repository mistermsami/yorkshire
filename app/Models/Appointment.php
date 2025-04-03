<?php

namespace App\Models;

use App\Enums\ContactType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    protected $table = 'appointment';
    protected $casts = [
        'contact_type' => ContactType::class,
    ];
    protected $fillable = ['name', 'email', 'contact', 'branch', 'contact_type', 'month', 'year', 'day', 'time'];
    //
    public $timestamps = true; // This ensures Laravel adds created_at and updated_at
}
