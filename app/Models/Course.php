<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['short_name', 'full_name'];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }

    public function register()
    {
        return $this->hasMany(Register::class);
    }
}
