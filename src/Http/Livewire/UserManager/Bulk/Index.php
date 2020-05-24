<?php

namespace Openresources\UserManager\Http\Livewire\UserManager\Bulk;

use Openresources\UserManager\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use App\User;

class Index extends Component
{
    protected $users;

    public function mount()
    {
        $this->users = User::get();
    }

    public function render()
    {
        return view('user-manager::livewire.user-manager.bulk.index', ['users' => $this->users]);
    }


}
