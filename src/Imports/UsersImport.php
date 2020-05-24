<?php

namespace Openresources\UserManager\Imports;

use Openresources\UserManager\Mail\AccountCreated;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersImport implements OnEachRow, WithHeadingRow
{
    use Importable;

    public function onRow(Row $row)
    {

        $row = $row->toArray();

        $user = User::where('email', $row['email'])->first();
        
        if (! empty($user)) {
            return null;
        }
        

        User::create([
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => Hash::make($row['password'])
        ]);

        Mail::to($row['email'])->send(new AccountCreated($row['name']));
    }
}
