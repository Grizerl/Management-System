<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        $view_students = Register::all();
        return view('pages.students.students-view', compact('view_students'));
    }
}
