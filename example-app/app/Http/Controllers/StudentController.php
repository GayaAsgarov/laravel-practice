<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function list()
    {
        $students = DB::table('student')->get();
        // dd($students);
        return view('student', compact('students'));
    }
}
