<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function quality()
    {
        return view('why-us.quality');
    }

    public function delivery()
    {
        return view('why-us.delivery');
    }

    public function technology()
    {
        return view('why-us.technology');
    }

    public function efficiency()
    {
        return view('why-us.efficiency');
    }
}
