<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Student extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $guarded=[];
//the relationship student with gender
    public function gender(){
        return $this->belongsTo(Gender::class,'gender_id');
    }
   
//the relationship student with grade
public function grade(){
    return $this->belongsTo(Grade::class,'grade_id');
}
}
