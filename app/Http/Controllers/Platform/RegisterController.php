<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterRequest;
use App\Models\Academic_Sessions;
use App\Models\Course;
use App\Models\Register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $register = Register::all();
        return view('pages.register.view', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all();
        $session = Academic_Sessions::all();
        return view('pages.register.register-add', compact('course', 'session'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $registerRequest)
    {
       Register::create($registerRequest->validated());

       return redirect()->back()->with('success', 'Student successfully registered!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $register = Register::findOrFail($id);
        $course = Course::all();
        $session = Academic_Sessions::all();
        return view('pages.register.register-edit', compact('course','register', 'session'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegisterRequest $registerRequest, $id)
    {
        $register = Register::findOrFail($id);

        $register->update($registerRequest->validated());

        return redirect()->back()->with('success', 'Student information successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $register = Register::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Student successfully deleted!');
    }
}
