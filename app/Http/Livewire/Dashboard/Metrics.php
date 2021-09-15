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
        
        $this->all = count($ticket->get());
        $this->open = count($ticket->where('open',true)->get());
        $this->escalated = count($ticket->whereNotNull('escalated')->get());
        $this->solved = count($ticket->where('open',false)->get());

    }



    public function render()
    {
        return view('livewire.dashboard.metrics');
    }
}
