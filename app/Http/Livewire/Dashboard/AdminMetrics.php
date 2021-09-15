<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\User;
use App\Models\Ticket;

class AdminMetrics extends Component
{

    public $users; 
    public $admins; 
    public $tickets; 

    public function mount(){
        $this->users = User::all();
        $this->admins = User::where('is_admin',true)->get();
        $this->tickets = Ticket::all();
    }

    public function render()
    {
        return view('livewire.dashboard.admin-metrics');
    }
}
