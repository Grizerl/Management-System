<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $fillable = [
        'course_id',
        'first_name',
        'middle_name',
        'last_name',
        'guardian_number',
        'gender',
        'occupation'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
