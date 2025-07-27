<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;

class ContactSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $emailform;
    public $pagetype;

    public function __construct($emailform, $pagetype = null)
    {
        $this->emailform = $emailform;
        $this->pagetype = $pagetype;
    }

    public function build()
    {
        // Log::info("Appointment Confirmation Message", [
        //     'name' => $this->emailform->name,   
        //     'email' => $this->emailform->email,
        //     'contact' => $this->emailform->contact,
        //     'appointment_type' => $this->emailform->appointment_type,
        //     'date' => $this->emailform->date,
        //     'time' => $this->emailform->time,
        //     'message' => $this->emailform->message,
        //     'pagetype' => $this->pagetype,
        // ]);

        if ($this->pagetype == '1') {
            return $this->from('noreply@yorkshirehairandskinsolutions.co.uk', 'Yorkshire')
                ->subject('Thank you for contacting Yorkshire Hair & Skin Solutions')
                ->cc('support@yorkshirehairandskinsolutions.co.uk')
                ->view('emails.contact-submitted');
        } elseif ($this->pagetype == '2') {
            return $this->from('noreply@yorkshirehairandskinsolutions.co.uk', 'Yorkshire')
                ->subject('Thank you for contacting Yorkshire Hair & Skin Solutions')
                ->cc('support@yorkshirehairandskinsolutions.co.uk')
                ->view('emails.appointment-submitted');
        } 
    }
}
