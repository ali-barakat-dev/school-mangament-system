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

        return $this->hasMany(Classroom::class);

    }
    //علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة
    public function Sections()
    {

        return $this->hasMany(Section::class, 'id');

    }
}
