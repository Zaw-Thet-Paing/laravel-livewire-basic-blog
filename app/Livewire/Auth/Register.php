<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|string')]
    public $name;
    #[Validate('required|email|unique:users')]
    public $email;
    #[Validate('required|min:8')]
    public $password;

    public function registerUser()
    {
        $this->validate();

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        Auth::login($user);

        $this->redirect(route('user.home'), navigate:true);

    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
