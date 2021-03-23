<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index()
    {
        $education = DB::table('education')->get();
        return view('forms.job', ['education' => $education]);
    }

    public function store(Request $request)
    {
        return $request;
    }
}
