<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_courses',
        'nama',
        'tanggal_ujian',
        'tanggal_scan',
        'file',
        'text',
        'is_generate',
        'format'
    ];

    protected $hidden = ["deleted_at"];
}
