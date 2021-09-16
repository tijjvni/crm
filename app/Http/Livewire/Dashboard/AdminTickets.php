<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Ticket;

use Livewire\WithPagination;

class AdminTickets extends Component
{

    use WithPagination;

    public $tickets;

    public function mount(){
        // $this->tickets = Ticket::all();
    }

    public function render()
    {
        return view('livewire.dashboard.admin-tickets', [
            'tickets' => Ticket::paginate(10)
        ]);
    }
}
