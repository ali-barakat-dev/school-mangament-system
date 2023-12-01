<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public $fillable = [
        'id',
        'name_en',
        'name_ar',
        'procsess',
    ];
    public function classes()
    {

        return $this->hasMany(Classroom::class,'id');

    }
    //علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة
    public function Section()
    {

        return $this->hasMany(Section::class, 'grade_id');

    }
}
