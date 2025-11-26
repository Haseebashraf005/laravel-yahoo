<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function allStudents()
    {
        // $students = DB::table('students')->select('id', 'name', 'email')->where('id','5')->get();
        $students = DB::table('students')->select('id', 'name', 'email')->get();
        // return $students;  
        return view('user-list', compact('students'));

        // return view('user-list', ['students' => $students]);
        // dd($students);
        // return $students;


        $students = DB::table('students')->find(5);
        return $students;  
    }

    function allStudents_model()
    {
        $students = Student::select('name', 'email')->get();
        // dump($students)  ;
        return $students;
    }

    // single user
      function studentDetail($id)
    {
        // echo "detail for id: " . $id;
        // $students = DB::table('students')->select('id', 'name', 'email')->where('id',$id)->get();
        $students = DB::table('students')->where('id',$id)->get();
        if($students->isEmpty()){
            return "No student found with id: " . $id;
        }
        // return $students;
        return view('student-detail', compact('students'));

    }



}
