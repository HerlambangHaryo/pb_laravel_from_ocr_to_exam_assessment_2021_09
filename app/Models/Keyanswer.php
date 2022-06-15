<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keyanswer extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_exams',
        'no',
        'key'
    ];

    protected $hidden = ["deleted_at"];
}
