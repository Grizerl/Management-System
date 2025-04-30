<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\SubjectsRequest;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = Subject::all();
        return view('pages.subjects.view', compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::with('subject')->get();
        return view('pages.subjects.subjects-add', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectsRequest $subjectsRequest)
    {
        Subject::create($subjectsRequest->validated());

        return redirect()->back()->with('success', 'Subject created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $course = Course::with('subject')->get();
        return view('pages.subjects.subjects-edit', compact('course','subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);

        $valideted = $request->validate([
            'course_id' => 'required',
            'subject_1' => 'required|string|max:50',
            'subject_2' => 'required|string|max:50',
            'subject_3' => 'required|string|max:50',
        ]);

        $subject->update($valideted);

        return redirect()->back()->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Subject deleted successfully.');
    }
}
