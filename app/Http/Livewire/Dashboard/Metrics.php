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
        $all = $ticket->count();
        $open = $ticket->where('open',true)->count();
        $escalated = $ticket->whereNotNull('escalated')->count();
        $solved = $ticket->where('open',false)->count();

        dd($all,$open,$escalated,$solved);
    }



    public function render()
    {
        return view('livewire.dashboard.metrics');
    }
}
