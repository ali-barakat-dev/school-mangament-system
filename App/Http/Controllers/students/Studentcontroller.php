<?php

namespace App\Http\Controllers\students;
use App\Http\Controllers\Controller;

use App\Repositry\StudentRepositry;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $Student;
    function __construct(StudentRepositry $Student)
    {
        $this->Student = $Student;
    }
    function index(){
    $students= $this->Student->getAllStudents();
    return view('students.students',compact('students'));
    }
    function create()
    {
    return  $this->Student->craetestudent();
       
    }
    function store(Request $request)
    {

    return $this->Student->StudentsStore($request);
    }
    function edit($id){
    $Student=$this->Student->editStudents($id); 
   
      return view('teachers.edit_teacher',compact('Student'));
    }

    function update(Request $request)
    {

    return $this->Student->StudentsUpdate($request);
    }
}
