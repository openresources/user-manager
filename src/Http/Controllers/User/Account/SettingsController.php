<?php

namespace Openresources\UserManager\Http\Controllers\User\Account;

use Illuminate\Http\Request;
use Openresources\UserManager\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        return view('user-manager::users.accounts.index');
    }
}
