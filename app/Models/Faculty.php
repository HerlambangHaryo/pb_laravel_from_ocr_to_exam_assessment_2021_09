<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'nama',
        'id_universities'
    ];

    protected $hidden = ["deleted_at"];
}
