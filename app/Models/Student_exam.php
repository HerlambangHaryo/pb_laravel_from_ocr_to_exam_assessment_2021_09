<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_exam extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_exams',
        'lineofcode',
        'nama',
        'nim',
        'tanggal_ujian',
        'interval',
        'true',
        'weight',
        'grade'
    ];

    protected $hidden = ["deleted_at"];
}
