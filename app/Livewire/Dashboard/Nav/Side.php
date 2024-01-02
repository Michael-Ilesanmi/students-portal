<?php

namespace App\Livewire\Dashboard\Nav;

use Livewire\Component;

class Side extends Component
{
    public $sideNavBtns = [
        [
            'name' => 'dashboard',
            'text' => 'dashboard',
            'icon' => 'line-md:home-md',
            'route'=> '/dashboard'
        ],
        [
            'name' => 'sponsors',
            'text' => 'my sponsors',
            'icon'=> 'cil:life-ring',
            'route'=> '/'
        ],
        [
            'name' => 'kins',
            'text' => 'next of kins',
            'icon'=> 'bi:chevron-double-right',
            'route'=> '/'
        ],
        [
            'name' => 'profile',
            'text' => 'my profile',
            'icon' => 'gg:profile',
            'route'=> '/dashboard/profile'
        ],
        [
            'name' => 'logout',
            'text' => 'logout',
            'icon' => 'circum:logout',
            'route'=> '/dashboard/logout'
        ],
    ];
    public function render()
    {
        return view('livewire.dashboard.nav.side');
    }
}
