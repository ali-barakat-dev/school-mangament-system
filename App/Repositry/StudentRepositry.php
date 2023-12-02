<?php

namespace App\Repositry;

use App\models\Student;
use App\models\Bload;
use App\models\Gender;
use App\Models\Grade;
use App\models\MyParant;
use App\models\Nationalitie;
use Exception;
use Illuminate\Support\Facades\Hash;


interface StudentRepositryInterface
{
    public function getAllStudents();
    public function getGender();
    public function StudentsStore($request);
  public function editStudents($id);
  public function StudentsUpdate($request);
  public function DeleteStudents($id);
}
class StudentRepositry implements StudentRepositryInterface
{

      public function getAllStudents()
      {
       return Student::all();
       
      }
      public function getGender()
      {
       return Gender::all();
      }
      public function craetestudent(){
        $data['my_class']=Grade::all();
        $data['parants']=MyParant::all();
        $data['Genders']=Gender::all();
        $data['Nationals']=Nationalitie::all();
        $data['bloods']=Bload::all();
        return view('student.student_add',$data);
      }
      public function StudentsStore($request)
      {   
    
    try{

      $Teachers=new Student();
      $Teachers->Email =$request->Email;
      $Teachers->Password =Hash::make($request->Password);
      $Teachers->Name =['en'=>$request->Name_en ,'ar'=>$request->Name_ar];
      $Teachers->specialization_id =$request->specialization_id;
      $Teachers->Gender_id =$request->Gender_id;
      $Teachers->joining_Date =$request->joining_Date;
      $Teachers-> Address=$request->Address;
      $Teachers->save();
      return redirect()->route('teacher.create');
    }catch(Exception $e){
    return redirect()->back()->withErrors($e);
    }

      }
      public function editStudents($id){
        return  Student::findOrfail($id);
      }
  public function StudentsUpdate($request){
   try{
     $Teachers= Student::findOrFail($request->id);

    $Teachers->Email =$request->Email;
    $Teachers->Password =Hash::make($request->Password);
    $Teachers->Name =['en'=>$request->Name_en ,'ar'=>$request->Name_ar];
    $Teachers->specialization_id =$request->specialization_id;
    $Teachers->Gender_id =$request->Gender_id;
    $Teachers->joining_Date =$request->joining_Date;
    $Teachers-> Address=$request->Address;
    $Teachers->save();
    return redirect()->route('teacher.index');
  
   }catch(Exception $e)
{
  return $e;
}
    

  }

  public function DeleteStudents($id){
    Student::findOrfail($id)->delete();
    
  }


}