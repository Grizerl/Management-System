<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject_1', 'subject_2', 'subject_3', 'course_id'];

    /**
     * Summary of course
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Course, Subject>
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Summary of register
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Register, Subject>
     */
    public function register(): HasMany
    {
        return $this->hasMany(Register::class);
    }
}
