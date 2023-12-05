<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'email' => 'required|unique:students,Email,'.$this->id,
            'Name'	=>  'required',
            'password'=>  'required',
            'gender_id'=>  'required',
            'nationalitie_id'=>  'required',
            'bload_id'=>  'required',
            'Date_Birth'=>  'required',
            'grade_id'=>  'required',
            'classroom_id'=>  'required',
            'section_id'=>  'required',
            'parant_id'=>  'required',
            'academic_year' =>  'required',      

        ];
    }
    public function messages()
    {
        return [
            'email .required'=>'this is required',
            'Name.required'=>'this is required',
            'password .required'=>'this is required',
            'gender_id .required'=>'this is required',
            'nationalitie_id .required'=>'this is required',
            'bload_id .required'=>'this is required',
            'Date_Birth .required'=>'this is required',
            'grade_id .required'=>'this is required',
            'classroom_id .required'=>'this is required',
            'section_id .required'=>'this is required',
            'parant_id .required'=>'this is required',
            'academic_year.required'=>'this is required',      

        ];
    }
}
