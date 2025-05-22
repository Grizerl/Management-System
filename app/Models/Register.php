<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Register extends Model
{
    protected $table = 'registers';
    protected $fillable = [
        'course_id',
        'session_id',
        'first_name',
        'middle_name',
        'last_name',
        'guardian_number',
        'gender',
        'occupation'
    ];

    /**
     * Summary of course
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Course, Register>
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Summary of subject
     * @return BelongsTo<Subject, Register>
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Summary of session
     * @return BelongsTo<AcademicSessions, Register>
     */
    public function session(): BelongsTo
    {
        return $this->belongsTo(AcademicSessions::class);
    }
}
