<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::select(Student::raw('count(*) as student_count, status'))->groupBy('status')->get();
        return $students;
    }

    public function innerJoin()
    {
        $result = DB::table('student')
        ->join('subject', 'student.id', '=', 'subject.student_id')
        ->select('student.name as student_name', 'subject.name as subject_name')
        ->get();
        return $result;
    }

    public function leftJoin()
    {
        $result = DB::table('student')
        ->leftJoin('subject', 'student.id', '=', 'subject.student_id')
        ->select('student.name as student_name', 'subject.name as subject_name')
        ->get();
        return $result;
    }

    public function rightJoin()
    {
        $result = DB::table('student')
        ->rightJoin('subject', 'student.id', '=', 'subject.student_id')
        ->select('student.name as student_name', 'subject.name as subject_name')
        ->get();
        return $result;
    }

    public function crossJoin()
    {
        $result = DB::table('students')
                ->crossJoin('subject')
                ->select('students.name as student_name', 'subject.name as subject_name')
                ->get();
        return $result;
    }

    public function advanceJoin()
    {
        $result = DB::table('students')
                ->leftJoin('subject', function($join) {
                    $join->on('students.id', '=', 'subject.student_id');
                })
                ->select('students.name as student_name', 'subject.name as subject_name')
                ->where('students.status', '=', 1)
                ->get();
        return $result;
    }

    public function subqueryJoin()
    {
        $subjectData = DB::table('subject')->select('student_id', 'name as subjectName');
        
        $result = DB::table('students')
                ->joinSub($subjectData, 'subjectData', function($join){
                    $join->on('students.id', '=', 'subjectData.student_id');
                })->get();
        return $result;
    }
}