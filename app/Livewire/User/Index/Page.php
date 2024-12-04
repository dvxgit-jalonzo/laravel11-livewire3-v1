<?php

namespace App\Livewire\User\Index;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Page extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::paginate(30);
        return view('livewire.user.index.page', compact('users'));
    }
}
