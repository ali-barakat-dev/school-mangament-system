<?php

namespace App\Http\Controllers\students;
use App\Http\Controllers\Controller;
use App\models\Student;
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
    $student= $this->Student->craetestudent();
return view('students.add_student',compact('student'));
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
