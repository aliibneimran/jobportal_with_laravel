<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use App\Models\backend\Industry;
use App\Models\backend\Job;
use App\Models\backend\Location;
use App\Models\Company;
use App\Models\CompanyDetails;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['jobs'] = Job::paginate(3);
        $data['industries'] = Industry::all();
        $data['locations'] = Location::all();
        $data['categories'] = Category::all();
        $data['company'] = Company::all();
        $data['comDetails'] = CompanyDetails::all();
        $data['totalJobs'] = Job::count(); 
        return view('frontend/jobsList',$data);
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
        // $data['jobs'] = Job::find($id);
        // $data['locations'] = Location::all();
        // $data['categories'] = Category::all();
        // return view('frontend/jobDetails',$data);
        // return view('backend.brands.index',compact('brand'));
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
