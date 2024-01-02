<?php

namespace App\Livewire\Dashboard\Nav;

use Livewire\Attributes\On;
use Livewire\Component;

class Top extends Component
{
    public $sessions = [
        [
            'id'=>1,
            'title'=>'2020/2021'
        ]
    ];
    public $sideNav = false;

    #[On('toggle-side-nav')] 
    public function toggleside ()
    {
        $this->sideNav = ! $this->sideNav;
    }

    public function render()
    {
        return view('livewire.dashboard.nav.top');
    }
}
