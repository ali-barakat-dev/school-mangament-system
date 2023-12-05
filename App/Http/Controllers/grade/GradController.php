<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use App\Http\Requests\GradeRequest;
use App\Models\ClassRoom;
use App\Models\Grade;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class GradController extends Controller
{
    function index()
    {
        $grades = Grade::select('id', 'name_' . LaravelLocalization::getCurrentLocale() . ' as name', 'procsess')->get();
        return view('grade.grades', compact('grades'));
    }
    function create()
    {
        return view('grade.add_grade');
    }
    public function store(GradeRequest $request)
    {
        Grade::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'procsess' => $request->procsess,
        ]);
        return redirect()->route('grad.index');
    }
    public function edit($grade_id)
    {
        $grade = Grade::findOrfail($grade_id);
        Grade::select(['name_en', 'name_ar', 'procsess',]);
        return view('grade.edit_grade ', compact('grade'));
    }
    function update(GradeRequest $request, $grade_id)
    {
        $id = Grade::findOrfail($grade_id);
        if (!$id)
            return redirect()->back();

        $id->update($request->all());
        return redirect()->route('grad.index');
    }
    function destroy(GradeRequest $request)
    {
        $class_id = ClassRoom::where('grade_id', $request->id)->pluck('grade_id');
        if ($class_id->count() == 0) {
        Grade::find($request->id)->delete();
            return redirect()->route('grad.index');
        } else {
            return redirect()->back()->withErrors($request);
        }

    }
    public function show($grade_id)
    {
        $grades = Grade::find($grade_id);
        return $grades;
    }

}