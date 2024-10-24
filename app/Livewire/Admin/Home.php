<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{

    public function logoutUser()
    {
        Auth::logout();
        $this->redirect(route('login'), navigate:true);
    }

    public function render()
    {
        return view('livewire.admin.home');
    }
}
