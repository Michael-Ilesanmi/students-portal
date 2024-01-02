<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    #[Layout('components.layouts.auth')] 
    #[Title('Login')] 

    public function login() { 
        if (Auth::attempt(['email'=>$this->email, 'password'=>$this->password], $this->remember)) {
            session()->regenerate(); 
            $first_name = auth()->user()->first_name;
            return redirect()->success("Welcome $first_name !")->intended('dashboard');
        } 
        return back()->error('The provided password does not match our records.')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
