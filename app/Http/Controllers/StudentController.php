<?php

namespace App\Http\Controllers;
use App\Imports\StudentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new StudentImport, $request->file('student_file'));
        return "Successfully";
    }
}
