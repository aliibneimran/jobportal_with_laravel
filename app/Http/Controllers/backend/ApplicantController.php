<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\frontend\ApplicationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyUser = Auth::guard('company')->user();
        $applicants = Applicant::where('company_id', $companyUser->id)->get();
        // return view('backend.jobs.index', compact('jobs'))
        // $applicants = Applicant::all();
        $data['totalApplicant'] = Applicant::count(); 
        return view('backend.applications.index',compact('applicants'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function approve($id)
    {
        $status = Applicant::find($id);
        $status->status = 1;
        $status->update();
        return redirect()->back();
    }
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
        $applicant = Applicant::find($id);
        dd($applicant);
        // $cvContent = $applicant->cv;
        return view('backend.applications.index',compact('applicant'));
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
