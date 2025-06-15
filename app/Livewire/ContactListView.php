<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;

class ContactListView extends Component
{
    use WithPagination;

    public $setLimit = 10;
    public $namefilter, $emailfilter, $subjectfilter, $datefilter;
    public $deleteId;

    protected $paginationTheme = 'bootstrap';

    public function updating($property)
    {
        if (in_array($property, ['namefilter', 'emailfilter', 'subjectfilter',  'datefilter', 'setLimit'])) {
            $this->resetPage();
        }
    }

    public function clearFilters()
    {
        $this->reset(['namefilter', 'emailfilter', 'subjectfilter', 'datefilter', 'setLimit']);
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatch('showDeleteConfirmation');
    }

    public function delete()
    {
        try {
            Contact::findOrFail($this->deleteId)->delete();
            session()->flash('success', 'Contact Detail deleted successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Error deleting Contact Detail.');
        }

        $this->deleteId = null;

        // Close modal after delete
        $this->dispatch('closeDeleteModal');
    }

    public function render()
    {
        $query = Contact::query();

        $query->when($this->namefilter, fn($q) => $q->where('name', 'like', '%' . $this->namefilter . '%'));

        $query->when($this->emailfilter, fn($q) => $q->where('email', 'like', '%' . $this->emailfilter . '%'));

        $query->when($this->subjectfilter, fn($q) => $q->where('subject', 'like', '%' . $this->subjectfilter . '%'));

        $query->when($this->datefilter, fn($q) => $q->where('created_at', 'like', '%' . $this->datefilter . '%'));

        $contactlist = $query->paginate($this->setLimit);

        return view('livewire.contact-list-view', compact('contactlist'));
    }
}
