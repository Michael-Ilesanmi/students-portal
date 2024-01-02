<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Profile extends Component
{
    #[Title('Student Dashboard')] 

    public $user;

    #[Validate('required|min:6')] 
    public $password;
    #[Validate('required|min:6|confirmed')] 
    public $new_password;
    #[Validate('required|min:6')] 
    public $new_password_confirmation;
    
    public function mount()
    {
        $this->user = Auth::user();
    } 

    public function updatePassword()
    {
        $this->validate(); 
        if (! Hash::check($this->password, $this->user->password)) {
            return back()->error('The provided password does not match our records.'); 
        }    
        if ($this->new_password !== $this->new_password_confirmation) {
            return back()->error('New password does not match'); 
        } 
        $hash = Hash::make($this->new_password);
        $user = User::find($this->user->id);
        $user->update(['password'=>$hash]);
        $this->reset('password', 'new_password', 'new_password_confirmation');
        return redirect()->success('Password updated successfully'); 
    }

    public function render()
    {
        return view('livewire.dashboard.profile');
    }
}
