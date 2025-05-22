<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends BaseController
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $data = $this->service->count();
        return view('pages.main', compact('data'));
    }
}
