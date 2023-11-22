<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $fillable = [
        'id',
        'name_en',
        'name_ar',
        'status',
        'grade_id',
        'classroom_id',
    ];
    // public function grades()
    // {

    //     return $this->belongsTo(Grade::class,'id');

    // }

    //علاقة بين القسم والصفوف لعرض اسم الصف في الاقسام
    public function my_class()
    {

        return $this->belongsTo(Classroom::class);

    }
}
