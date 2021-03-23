<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return 'index';
    }

    public function store(Request $request)
    {
        return $request;
    }
}
