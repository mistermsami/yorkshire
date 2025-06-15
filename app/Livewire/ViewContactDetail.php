<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ViewContactDetail extends Component
{
    public $contactId;
    public function render()
    {
        $contactDetail = Contact::find($this->contactId);
        return view('livewire.view-contact-detail', [
            'contactDetail' => $contactDetail,
        ]);
    }
}
