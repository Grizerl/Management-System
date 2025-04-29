<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('pages.courses.view', compact('courses'));
    }

    public function create()
    {
        return view('pages.courses.courses-add');
    }

    public function store(StoreRequest $request)
    {
        Course::create([
            'short_name' => $request->short_name,
            'full_name' => $request->full_name,
            'created_at' => $request->creation_date,
        ]);

        return back()->with('success', 'Course created successfully.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('pages.courses.courses-edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'short_name' => 'required|string|max:50',
            'full_name' => 'required|string|max:250',
            'creation_date' => 'required|date',
        ]);

        $course->update([
            'short_name' => $validated['short_name'],
            'full_name' => $validated['full_name'],
            'created_at' => $validated['creation_date'],
        ]);

        return back()->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        Course::findOrFail($id)->delete();
        return back()->with('success', 'Course deleted successfully.');
    }
}
