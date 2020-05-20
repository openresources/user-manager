<?php

namespace Openresources\UserManager\Http\Livewire\UserManager;

use App\User;
use Livewire\Component;

class Home extends Component
{
    protected $users;

    public function mount()
    {
        $this->users = User::get();
    }

    public function render()
    {
        return view('user-manager::livewire.user-manager.home', ['users' => $this->users]);
    }
}
