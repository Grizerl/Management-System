<?php

namespace App\Http\Controllers;

use App\Services\MainServices;

class BaseController extends Controller
{
    public $service;

    public function __construct(MainServices $service)
    {
        $this->service = $service;
    }
}
