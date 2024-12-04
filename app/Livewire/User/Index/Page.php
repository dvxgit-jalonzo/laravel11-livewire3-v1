<?php

namespace App\Livewire\User\Index;

use App\Models\User;
use Livewire\Component;

class Page extends Component
{

    public function render()
    {
        $users = User::all();
        return view('livewire.user.index.page', compact('users'));
    }
}
