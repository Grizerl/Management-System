<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('pages.courses.view', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.courses.courses-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $storeRequest)
    {
        Course::create([
            'short_name' => $storeRequest['short_name'],
            'full_name' => $storeRequest['full_name'],
            'created_at' => $storeRequest['creation_date'],
        ]);

        return redirect()->back()->with('success', 'Course created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courses = Course::findOrFail($id);
        return view('pages.courses.courses-edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'short_name' => 'required|string|max:50',
            'full_name' => 'required|string|max:250',
            'creation_date' => 'required|date',
        ]);

        $course->update($validated);

        return redirect()->back()->with('success', 'The course has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('success', 'Course deleted successfully.');
    }
}
