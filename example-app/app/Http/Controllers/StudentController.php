<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = "Student Data";
        $students = array('John', 'David', 'Mike');
        return view('welcome', compact('data', 'students'));
    }
}
