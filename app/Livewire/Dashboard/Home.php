<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Title('My Profile')] 

    public $user;
    public $greeting;

    public function mount()
    {
        $this->user = Auth::user();
        $time = date('h');
        if ($time >= 0 && $time < 12) {
            $this->greeting = "morning";
        } else if ($time >= 12 && $time < 5) {
            $this->greeting = "afternoon";
        } else {
            $this->greeting = "evening";
        }
    }

    public function render()
    {
        return view('livewire.dashboard.home');
    }
}
