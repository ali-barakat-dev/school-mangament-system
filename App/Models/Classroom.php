<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;


class Classroom extends Model
{
    public $fillable = [
        'id',
        'name_class_ar',
        'name_class_en',
        'grade_id',

    ];
    public $hidden = [
        'created_at',
        'updated_at',
    ];
    public function grades()
    {
        return $this->BelongsTo(Grade::class);
    }

    public function my_class()
    {

        return $this->hasMany(Section::class);

    }
}
