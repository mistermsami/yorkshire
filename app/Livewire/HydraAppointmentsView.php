<?php

namespace App\Livewire;

use App\Models\Hydra_Appointment;
use Livewire\Component;
use Livewire\WithPagination;

class HydraAppointmentsView extends Component
{
    use WithPagination;

    public $setLimit = 10;
    public $namefilter;
    public $emailfilter;
    public $contactfilter;
    public $typefilter;
    public $datefilter;

    protected $paginationTheme = 'bootstrap'; // For Bootstrap styling

    // Reset pagination on filter update
    public function updating($property)
    {
        if (in_array($property, ['namefilter', 'emailfilter', 'contactfilter', 'typefilter', 'datefilter', 'setLimit'])) {
            $this->resetPage();
        }
    }

    public function clearFilters()
    {
        $this->reset([
            'namefilter',
            'emailfilter',
            'contactfilter',
            'typefilter',
            'datefilter',
        ]);
    }

    public function render()
    {
        $query = Hydra_Appointment::query();

        $query->when($this->namefilter, fn($q) => $q->where('name', 'like', '%' . $this->namefilter . '%'));

        $query->when($this->emailfilter, fn($q) => $q->where('email', 'like', '%' . $this->emailfilter . '%'));

        $query->when($this->contactfilter, fn($q) => $q->where('contact', 'like', '%' . $this->contactfilter . '%'));

        $query->when($this->typefilter, fn($q) => $q->where('appointment_type', 'like', '%' . $this->typefilter . '%'));

        $query->when($this->datefilter, fn($q) => $q->where('date', 'like', '%' . $this->datefilter . '%'));

        $appointments = $query->paginate($this->setLimit);

        return view('livewire.hydra-appointments-view', compact('appointments'));
    }
}
