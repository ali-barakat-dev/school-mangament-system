<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Http\Request;

class Sectioncontroller extends Controller
{
    function index()
    {

        $Grades = Grade::with('Sections')->select(
            [
                'name_ar',
                'id',

            ]

        )->get();
        return view('section.section', compact('Grades'));
    }
    function create()
    {
        $grades = Grade::all();
        $classes = Classroom::all();
        return view('section.add_section', compact('grades', 'classes'));

    }
    /**
     * Summary of store
     * @param \Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    function store(Request $r)
    {

        Section::create([
            'name_en' => $r['name_en'],
            'name_ar' => $r['name_ar'],
            'status' => $r['status'],
            'grade_id' => $r['grade_id'],
            'classroom_id' => $r['classroom_id'],

        ]);
        return redirect()->route('section.index');
    }
    function getclasses($id)
    {
        $list_class = Classroom::where('grade_id', $id)->pluck('name_class', 'id');

    }
}
