<?php

namespace App\Livewire;

use App\Models\Prp_Appointment;
use Livewire\Component;
use Livewire\WithPagination;

class PrpAppointmentsView extends Component
{
    use WithPagination;

    public $setLimit = 10;
    public $namefilter, $emailfilter, $contactfilter, $typefilter, $datefilter;
    public $deleteId;

    protected $paginationTheme = 'bootstrap';

    public function updating($property)
    {
        if (in_array($property, ['namefilter', 'emailfilter', 'contactfilter', 'typefilter', 'datefilter', 'setLimit'])) {
            $this->resetPage();
        }
    }

    public function clearFilters()
    {
        $this->reset(['namefilter', 'emailfilter', 'contactfilter', 'typefilter', 'datefilter', 'setLimit']);
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatch('showDeleteConfirmation');
    }

    public function delete()
    {
        try {
            Prp_Appointment::findOrFail($this->deleteId)->delete();
            session()->flash('success', 'Appointment deleted successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Error deleting appointment.');
        }

        $this->deleteId = null;

        // Close modal after delete
        $this->dispatch('closeDeleteModal');
    }

    public function render()
    {
        $query = Prp_Appointment::query();

        $query->when($this->namefilter, fn($q) => $q->where('name', 'like', '%' . $this->namefilter . '%'));

        $query->when($this->emailfilter, fn($q) => $q->where('email', 'like', '%' . $this->emailfilter . '%'));

        $query->when($this->contactfilter, fn($q) => $q->where('contact', 'like', '%' . $this->contactfilter . '%'));

        $query->when($this->typefilter, fn($q) => $q->where('appointment_type', 'like', '%' . $this->typefilter . '%'));

        $query->when($this->datefilter, fn($q) => $q->where('date', 'like', '%' . $this->datefilter . '%'));

        $appointments = $query->paginate($this->setLimit);

        return view('livewire.prp-appointments-view', compact('appointments'));
    }
}
