<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicSessions extends Model
{
    protected $table = 'academic_sessions';

    protected $fillable = [
        'start_date',
        'end_date',
        'release_year',
    ];

    /**
     * Summary of register
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Register, AcademicSessions>
     */
    public function register(): HasMany
    {
        return $this->hasMany(Register::class);
    }
}
