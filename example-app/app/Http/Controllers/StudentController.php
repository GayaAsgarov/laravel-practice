<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::select(Student::raw('count(*) as student_count, status'))->groupBy('status')->get();
        return $students;
    }
}
