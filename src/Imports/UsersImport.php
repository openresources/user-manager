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

        $email = $row['email'] ?? $row[config('user-manager.bulk.imports.email_field')];

        $password = $row['password'] ?? $row[config('user-manager.bulk.imports.password_field')] ?? 'SIMple^Password' ;

        $user= User::where('email', $email)->first();
        
        if (! empty($user)) {
            return null;
        }
        

        User::create([
            'name' => $row['name'],
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        Mail::to($email)->queue(new AccountCreated($row['name']));
    }
}
