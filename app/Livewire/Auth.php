<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Livewire\Component;

class Auth extends Component
{

    public function logout()
    {
        FacadesAuth::logout();

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth');
    }
}
