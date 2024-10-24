<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;
    #[Validate('required')]
    public $password;

    public function loginUser()
    {
        $this->validate();

        if(!Auth::attempt(['email'=> $this->email, 'password'=> $this->password])){
            $this->addError('email', 'Login credential wrong!');
            return;
        }
        $this->redirect(route('user.home'), navigate:true);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
