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
        $all = count($ticket->get());
        $open = count($ticket->where('open',true)->get());
        $escalated = count($ticket->whereNotNull('escalated')->get());
        $solved = count($ticket->where('open',false)->get());

        dd($open);
    }



    public function render()
    {
        return view('livewire.dashboard.metrics');
    }
}
