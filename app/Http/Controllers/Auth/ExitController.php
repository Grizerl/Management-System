<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExitController extends Controller
{
    public function exit()
    {
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
