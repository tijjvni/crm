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
        $all = $ticket->get();
        $open = $ticket->where('open',true)->get();
        $escalated = $ticket->whereNotNull('escalated')->get();
        $solved = $ticket->where('open',false)->get();

    }



    public function render()
    {
        return view('livewire.dashboard.metrics');
    }
}
