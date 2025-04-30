<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = $this->service->count();
        return view('pages.main', compact('data'));
    }
}
