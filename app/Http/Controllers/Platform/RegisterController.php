<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterRequest;
use App\Models\AcademicSessions;
use App\Models\Course;
use App\Models\Register;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    /**
     * Summary of index
     * @return View
     */
    public function index(): View
    {
        $register = Register::paginate(15);
        return view('pages.register.view', compact('register'));
    }

    /**
     * Summary of create
     * @return View
     */
    public function create(): View
    {
        $course = Course::select('id', 'short_name')->get();
        $session = AcademicSessions::select('id', 'release_year')->get();
        return view('pages.register.register-add', compact('course', 'session'));
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Register\RegisterRequest $registerRequest
     * @return RedirectResponse
     */
    public function store(RegisterRequest $registerRequest): RedirectResponse
    {
        Register::create($registerRequest->validated());

        return redirect()->back()->with('success', 'Student successfully registered!');
    }

    /**
     * Summary of edit
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $register = Register::findOrFail($id);
        $course = Course::all();
        $session = AcademicSessions::all();
        return view('pages.register.register-edit', compact('course', 'register', 'session'));
    }

    /**
     * Summary of update
     * @param \App\Http\Requests\Register\RegisterRequest $registerRequest
     * @param int $id
     * @return RedirectResponse
     */
    public function update(RegisterRequest $registerRequest, int $id): RedirectResponse
    {
        $register = Register::findOrFail($id);

        $register->update($registerRequest->validated());

        return redirect()->back()->with('success', 'Student information successfully updated!');
    }
    /**
     * Summary of destroy
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Register::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Student successfully deleted!');
    }
}
