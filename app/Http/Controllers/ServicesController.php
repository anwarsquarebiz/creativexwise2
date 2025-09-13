<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function subtitling()
    {
        return view('services.subtitling');
    }

    public function dubbing()
    {
        return view('services.dubbing');
    }

    public function accessibility()
    {
        return view('services.accessibility');
    }

    public function speechRecognition()
    {
        return view('services.speech-recognition');
    }

    public function distribution()
    {
        return view('services.distribution');
    }

    public function creativePost()
    {
        return view('services.creative-post');
    }
}