<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject_1', 'subject_2', 'subject_3', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
