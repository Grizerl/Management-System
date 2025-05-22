<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\SubjectsRequest;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $subject = Subject::paginate(15);
        return view('pages.subjects.view', compact('subject'));
    }

    /**
     * Summary of create
     * @return View
     */
    public function create(): View
    {
        $course = Course::with('subject')->get();
        return view('pages.subjects.subjects-add', compact('course'));
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Subject\SubjectsRequest $subjectsRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SubjectsRequest $subjectsRequest): RedirectResponse
    {
        Subject::create($subjectsRequest->validated());

        return redirect()->back()->with('success', 'Subject created successfully.');
    }

    /**
     * Summary of edit
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $subject = Subject::findOrFail($id);
        $course = Course::with('subject')->get();
        return view('pages.subjects.subjects-edit', compact('course', 'subject'));
    }

    /**
     * Summary of update
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
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
     * Summary of destroy
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Subject::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Subject deleted successfully.');
    }
}
