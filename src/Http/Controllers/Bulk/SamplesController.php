<?php

namespace Openresources\UserManager\Http\Controllers\Bulk;

use Openresources\UserManager\Http\Controllers\Controller;

class SamplesController extends Controller
{
    public function index()
    {
        $pathToFile = storage_path('app/samples/user_list.xlsx');
        return response()->download($pathToFile, 'user_import_list.xlsx');
    }
}
