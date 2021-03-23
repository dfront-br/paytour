<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Carbon\Carbon;
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

        $job = new Job();
        $job->file = $request->file('file')->store('uploaded-files');;
        $job->ip_address = $request->ip();
        $job->send_at = Carbon::now();
        $job->name = $request->name;
        $job->email = $request->email;
        $job->phone = $request->phone;
        $job->occupation = $request->occupation;
        $job->educate_id = $request->educate_id;
        $job->note = $request->note;
        $job->save();

        return $job;
    }
}
