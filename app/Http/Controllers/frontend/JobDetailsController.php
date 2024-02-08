<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\backend\Category;
use App\Models\backend\Job;
use App\Models\backend\Location;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        if(Auth::guard('candidate')->check()){
            $candidateId = Auth::guard('candidate')->user()->id;
            $data['application'] = Applicant::where('candidate_id', $candidateId)->where('job_id', $id)->first();
            // $data['apply'] = Applicant::where('candidate_id', Auth::guard('candidate')->user()->id)->exists();
            $data['jobs'] = Job::find($id);
            $data['locations'] = Location::all();
            $data['categories'] = Category::all();
            $data['company'] = Company::all();
            return view('frontend/jobDetails',$data);
        } else {
            $data['jobs'] = Job::find($id);
            $data['locations'] = Location::all();
            $data['categories'] = Category::all();
            $data['company'] = Company::all();
            return view('frontend/jobDetails',$data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
