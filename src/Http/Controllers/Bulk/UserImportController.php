<?php

namespace Openresources\UserManager\Http\Controllers\Bulk;

use Openresources\UserManager\Imports\UsersImport;
use Openresources\UserManager\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class UserImportController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_list' => 'required|file',
        ]);

        if ($request->file('user_list')->isValid()) {
            Excel::import(new UsersImport(), $request->file('user_list'));
            session()->flash('status', __('User imported completed, check log for errors'));

            $recipients = (new UsersImport)->toCollection($request->file('user_list'))->collapse()->pluck('name', 'email');

        }

        return redirect()->route('user-manager.index');
    }

    public function messages()
    {
        return [
            'user_list.required' => 'A file must be provided',
        ];
    }
}
