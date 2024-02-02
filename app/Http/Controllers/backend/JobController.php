<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use App\Models\backend\Industry;
use App\Models\backend\Job;
use App\Models\backend\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('backend.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        $industry= Industry::all();
        $categories = Category::all();
        $jobs = Job::all();
        return view('backend.jobs.create',compact('jobs','locations','industry','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required|numeric',
            'position' => 'required',
            'category' => 'required',
            'location' => 'required',
            'industry' => 'required',
            'vacancy' => 'required|numeric',
            'photo' => 'mimes:jpg,jpeg,png'
        ]);
        $filename = time() . '.' . $request->photo->extension();
        if ($validate) {
        // $data = $request->all($filename);
            $data = [
                'title' => $request->title,
                'position' => $request->position,
                'description' => $request->description,
                'salary' => $request->salary,
                'vacancy' => $request->vacancy,
                'category_id' => $request->category,
                'location_id' => $request->location,
                'industry_id' => $request->industry,
                'company_id' => $request->company,
                'availability' => $request->availability,
                'image' => $filename,
            ];
        }
        // dd($data); 
        if (Job::create($data)) {
            $request->photo->move('uploads', $filename);
            return redirect('company/jobs')->with('msg', 'Job Successfully Post');
        }
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
        $jobs = Job::find($id);
        $locations = Location::all();
        $industry= Industry::all();
        $categories = Category::all();
        return view('backend.jobs.edit',compact('jobs','locations','industry','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Job::find($id);
        $filename = time() . '.' . $request->photo->extension();
        $data = [
            'title' => $request->title,
            'position' => $request->position,
            'description' => $request->description,
            'salary' => $request->salary,
            'vacancy' => $request->vacancy,
            'category_id' => $request->category,
            'location_id' => $request->location,
            'industry_id' => $request->industry,
            'company_id' => $request->company,
            'availability' => $request->availability,
            'image' => $filename,
        ];

        $job->update($data);
        $request->photo->move('uploads', $filename);
        return redirect('company/jobs')->with('msg', 'Job Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::find($id);
        $job->delete($id);
        return redirect('company/jobs')->with('msg', 'Successfully Deleted');
    }
}
