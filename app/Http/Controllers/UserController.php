<?php

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function uploadUsers(Request $request)
    {
        Excel::import(new UsersImport, $request->file);

        return "SUccessfully" ;   
}
}
