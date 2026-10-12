<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
        protected $fillable = [ 
        'id',
        'course_id',
        'exam_name',
        'student_id',
        'marks_obtained',
        'total_marks',
        'grade',
        'status',
        'semester',
    ];
}
