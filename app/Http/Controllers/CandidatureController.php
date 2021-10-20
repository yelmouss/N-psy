<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function index()
    {
        return view('candidature');
    }
}
