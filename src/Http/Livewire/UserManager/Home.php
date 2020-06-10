<?php

namespace Openresources\UserManager\Http\Livewire\UserManager;

use App\User;
use Livewire\Component;

class Home extends Component
{
    public $users;
    public $ids = [];
    protected $selectedUsers;
    public function mount()
    {
        $this->users = User::with('role')->get();
    }

    public function render()
    {
        return view('user-manager::livewire.user-manager.home', [
            'selectedUsers' => collect($this->selectedUsers),
        ]);
    }

    public function delete()
    {
        $countDeletedUsers = User::destroy(collect($this->filteredIds()));
        session()->flash('status', "{$countDeletedUsers} Users removed successfully");
        return redirect()->route('user-manager.index');
    }

    public function updateSelectedUsers()
    {
        $this->selectedUsers = collect(User::find($this->filteredIds()));
    }

    protected function filteredIds()
    {
        return collect($this->ids)->filter(function ($value, $key) {
            return $value != false;
        })->keys()->toArray();
    }
}
