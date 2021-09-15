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
        
        
        $all = count(Ticket::where('opened_by',auth()->id())->get());
        // $open = $ticket->where('open',true)->get();
        // $escalated = $ticket->whereNotNull('escalated')->get();
        // $solved = $ticket->where('open',false)->get();
        $open = 0;
        $escalated = 0;
        $solved = 0;


    }



    public function render()
    {
        return view('livewire.dashboard.metrics');
    }
}
