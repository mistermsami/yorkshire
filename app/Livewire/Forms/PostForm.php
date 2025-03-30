<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use App\Models\Appointment;
use Livewire\Form;

class PostForm extends Form
{
    public $name;
    public $email;
    public $contact;
    public $branch;
    public $contact_type;
    public $month;
    public $year;
    public $day;
    public $time;
    protected $listeners = ['updateDay'];

    public function updateDay($selectedDay)
    {
        dd("I am riger");
        $this->day = $selectedDay;
    }
    public function store()
    {
        dd($this->all());
    }
}
