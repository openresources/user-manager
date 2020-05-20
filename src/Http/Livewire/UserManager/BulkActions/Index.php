<?php

namespace Openresources\UserManager\Http\Livewire\UserManager\BulkActions;

use App\User;
use Livewire\Component;

class Index extends Component
{
    protected $users;

    public function mount()
    {
        $this->users = User::get();
    }

    public function render()
    {
        return view('user-manager::livewire.user-manager.bulk-actions.index', ['users' => $this->users]);
    }
}
