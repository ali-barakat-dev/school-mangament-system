<?php

namespace App\Http\Controllers\students;
use App\Http\Controllers\Controller;

use App\Repositry\StudentsRepositry;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $Student;
    function __construct(StudentsRepositry $Student)
    {
        $this->Student = $Student;
    }
    function index(){

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
