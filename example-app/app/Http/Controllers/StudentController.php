<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        $name = "John";
        $student_array = array(
            'name' => 'David',
            'email' => 'david@gmail.com'
        );
        return view('student', compact('name', 'student_array'));
    }
}