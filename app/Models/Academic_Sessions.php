<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academic_Sessions extends Model
{
    protected $table = 'academic__sessions';

    protected $fillable = [
        'start_date',
        'end_date',
        'release_year',
    ];

    public function register()
    {
        return $this->hasMany(Register::class);
    }
}
