<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Session\SessionRequest;
use App\Models\AcademicSessions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SessionController extends Controller
{
    /**
     * Summary of index
     * @return View
     */
    public function index(): View
    {
        $session = AcademicSessions::paginate(15);
        return view('pages.session.view', compact('session'));
    }

    /**
     * Summary of create
     * @return View
     */
    public function create(): View
    {
        return view('pages.session.session-add');
    }

    /**
     * Summary of store
     * @param \App\Http\Requests\Session\SessionRequest $sessionRequest
     * @return RedirectResponse
     */
    public function store(SessionRequest $sessionRequest): RedirectResponse
    {
        AcademicSessions::create($sessionRequest->validated());

        return redirect()->back()->with('success', 'Session successfully create!');
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        AcademicSessions::findOrFail($id)->delete();
        return redirect()->back();
    }
}
