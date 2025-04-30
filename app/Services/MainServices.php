<?php 

namespace App\Services;

use App\Models\Academic_Sessions;
use App\Models\Course;
use App\Models\Register;
use App\Models\Subject;

class MainServices
{
    public function count()
    {
        return [
            'courses' => Course::count(),
            'subjects' => Subject::count(),
            'session' => Academic_Sessions::count(),
            'register' => Register::count(),
            'students' => Register::count(),
        ];
    }
}