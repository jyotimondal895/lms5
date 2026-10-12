<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'course_id',
        'exam_name',
        'exam_date',
        'start_time',
        'end_time',
        'exam_type',
        'total_marks',
        'semester',
        ];
}
