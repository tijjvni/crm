<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Ticket;

class Metrics extends Component
{

    public $all;
    public $open;
    public $escalated;
    public $solved;

    public function mount(){
        $ticket = Ticket::where('opened_by',auth()->id());
        $all = (int) count($ticket->get());
        $open = (int) count($ticket->where('open',true)->get());
        $escalated = (int) count($ticket->whereNotNull('escalated')->get());
        $solved = (int) count($ticket->where('open',false)->get());

    }



    public function render()
    {
        return view('livewire.dashboard.metrics');
    }
}
