<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\User;

class AdminMetrics extends Component
{

    public $users; 

    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.dashboard.admin-metrics');
    }
}
