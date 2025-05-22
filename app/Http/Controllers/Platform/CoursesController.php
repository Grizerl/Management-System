<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $courses = Course::paginate(15);
        return view('pages.courses.view', compact('courses'));
    }

    /**
     * Summary of create
     * @return View
     */
    public function create(): View
    {
        return view('pages.courses.courses-add');
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Course\StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        Course::create($request->validated());

        return back()->with('success', 'Course created successfully.');
    }

    /**
     * Summary of edit
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $courses = Course::findOrFail($id);
        return view('pages.courses.courses-edit', compact('courses'));
    }

    /**
     * Summary of update
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
            'short_name' => 'required|string|max:50',
            'full_name' => 'required|string|max:250',
            'creation_date' => 'required|date',
        ]);

        $course->update($validated);

        return back()->with('success', 'Course updated successfully.');
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Course::findOrFail($id)->delete();
        return back()->with('success', 'Course deleted successfully.');
    }
}
