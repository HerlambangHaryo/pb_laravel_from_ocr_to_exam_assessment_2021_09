<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_sheet extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_exams',
        'id_student_exams',
        'no',
        'key',
        'answer',
        'correct'
    ];

    protected $hidden = ["deleted_at"];
}
