<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('forms.job');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
