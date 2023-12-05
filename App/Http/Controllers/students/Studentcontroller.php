<?php

namespace App\Http\Controllers\Students;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\models\Student;
use App\Repositry\StudentRepositry;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student;
    function __construct(StudentRepositry $student)
    {
        $this->student = $student;
    }
    function index()
    {
      return $this->student->getAllStudent();
    }

    function create()
    {
    return $this->student->craetestudent();
    }

    function store(StudentRequest $request)
    {
    return $this->student->studentStore($request);
    }

    function edit($id)
    {
     return $this->student->editStudent($id); 
    }

    function update(StudentRequest $request)
    {
    return $this->student->studentsUpdate($request);
    }

    function destroy(StudentRequest $request)
    {
      return $this->student->deleteStudent($request);
    }
}
