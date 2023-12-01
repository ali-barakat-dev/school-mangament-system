<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    function index(){
      $Grades = Grade::with('Section')->get();
     return view('section.section', compact('Grades'));
    }
    function create(){
        $grades = Grade::all(); 
        $classes = ClassRoom::all();
           $teacher=Teacher::all();
        return view('section.add_section', compact('grades', 'classes','teacher')); }
    function store(Request $r){
        Section::create([
            'name_en' => $r['name_en'],
            'name_ar' => $r['name_ar'],
            'status' => $r['status'],
            'grade_id' => $r['grade_id'],
            'classroom_id' => $r['classroom_id'],
        ]);
        return redirect()->route('section.index');
    }
   function edit($list_Section_id){

   return $list_Section_id;
   }
   function update(){

    }

     function delete(){

     }




    function getclasses($id)
    {
        $list_class = Classroom::where('grade_id', $id)->pluck('name_class_ar', 'id');
        return $list_class;

    }

}
