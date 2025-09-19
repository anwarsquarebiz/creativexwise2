<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliciesController extends Controller
{
    public function privacy()
    {
        return view('policies.privacy');
    }

    public function terms()
    {
        return view('policies.terms');
    }

    public function refund()
    {
        return view('policies.refund');
    }
}

