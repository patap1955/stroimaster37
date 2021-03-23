<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PageController extends Controller
{
    public function service(Service $service)
    {
        return view('pages.services', compact('service'));
    }

    public function price()
    {
        return view('pages.price');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
