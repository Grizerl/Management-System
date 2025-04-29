<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Http\Requests\Session\SessionRequest;
use App\Models\Academic_Sessions;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $session = Academic_Sessions::all();
        return view('pages.session.view', compact('session'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.session.session-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SessionRequest $sessionRequest)
    {
        Academic_Sessions::create([
            'start_date' => $sessionRequest->start_date,
            'end_date' => $sessionRequest->end_date,
            'release_year' => $sessionRequest->release_year
        ]);

        return redirect()->back()->with('success', 'Session successfully create!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $session = Academic_Sessions::findOrFail($id);
        $session->delete();
        return redirect()->back()->with('success', 'Session successfully deleted!');
    }
}
