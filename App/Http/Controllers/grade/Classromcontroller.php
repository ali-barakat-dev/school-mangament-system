<?php

namespace App\Http\Controllers\grade;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoomRequest;
use App\Models\Classroom;
use App\Models\Grade;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Classromcontroller extends Controller
{
    function index($id)
    {
        

        // $clases = Classroom::with('grades')->select(
        //     [
        //         'id',
        //         'name_class_' . LaravelLocalization::getCurrentLocale() . ' as name',
        //         'grade_id'
        //     ]
        // )->get();
        // return view('class_room.classroom', compact('sections'));
        return $sections;
    }
    function create()
    {
        $grades = Grade::all();
        return view('class_room.add_class', compact('grades'));
    }
    function store(ClassRoomRequest $request)
    {
        Classroom::create([
            'name_class_ar' => $request['name_class_ar'],
            'name_class_en' => $request['name_class_en'],
            'grade_id' => $request['grade_id'],
        ]);
        return redirect()->route('class.index');
    }
    function edit($class_id)
    {
        $grade = Grade::all();
        $class = Classroom::find($class_id);
        Classroom::select([
            'name_class_ar',
            'name_class_en',
            'grade_id',
        ]);
        return view('class_room.edit_class', compact('class', 'grade'));
    }
    public function update(ClassRoomRequest $request, $class_id)
    {
        $class = Classroom::find($class_id);
        if (!$class)
            return redirect()->back();
        $class->update($request->all());
        return redirect()->route('class.index');
    }
    public function delete($class_id)
    {
        $class = Classroom::find($class_id);
        $class->delete();
        return redirect()->route('class.index');
    }

}
