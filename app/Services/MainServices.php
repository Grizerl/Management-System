<?php

namespace App\Services;

use App\Models\AcademicSessions;
use App\Models\Course;
use App\Models\Register;
use App\Models\Subject;

class MainServices
{
    /**
     * Summary of count
     * @return array{courses: int, register: int, session: int, students: int, subjects: int}
     */
    public function count(): array
    {
        return [
            'courses' => Course::count(),
            'subjects' => Subject::count(),
            'session' => AcademicSessions::count(),
            'register' => Register::count(),
            'students' => Register::count(),
        ];
    }
}
