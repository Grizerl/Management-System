<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Summary of student
     * @return \Illuminate\Contracts\View\View
     */
    public function student(): View
    {
        $view_students = Register::paginate(20);
        return view('pages.students.students-view', compact('view_students'));
    }
}
