<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicSession extends Model
{
    protected $table = 'academic_sessions';

    protected $fillable = [
        'start_date',
        'end_date',
        'release_year',
    ];

    /**
     * Summary of register
     * @return HasMany<Register, AcademicSession>
     */
    public function register(): HasMany
    {
        return $this->hasMany(Register::class);
    }
}
