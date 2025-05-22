<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['short_name', 'full_name'];

    /**
     * Summary of subject
     * @return HasMany<Subject, Course>
     */
    public function subject(): HasMany
    {
        return $this->hasMany(Subject::class);
    }

    /**
     * Summary of register
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Register, Course>
     */
    public function register(): HasMany
    {
        return $this->hasMany(Register::class);
    }
}
