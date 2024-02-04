<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use App\Models\backend\Industry;
use App\Models\backend\Job;
use App\Models\backend\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $locations = Location::all();
        $industry= Industry::all();
        $categories = Category::all();
        if($request->filled('search')){
            $jobs = Job::
             join('categories', 'jobs.category_id', '=', 'categories.id')
            ->join('locations', 'jobs.location_id', '=', 'locations.id')
            ->join('industries', 'jobs.industry_id', '=', 'industries.id')
            ->where('categories.name', 'like', '%' . $request->search . '%')
            ->orWhere('locations.name', 'like', '%' . $request->search . '%')
            ->orWhere('industries.name', 'like', '%' . $request->search . '%')
            ->orWhere('title', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orWhere('salary', 'like', '%' . $request->search . '%')
            ->orWhere('tag', 'like', '%' . $request->search . '%')
            ->get();
        }else{
            $jobs = Job::all();
        }
        return view('backend.jobs.index', compact('jobs','locations','industry','categories'));

        $data['locations'] = Location::with('job')->get();
        $data['jobs'] = Job::latest()->take(3)->get();
        $data['locations'] = Location::latest()->take(4)->get();
        $data['industries'] = Industry::all();
        $data['categories'] = Category::all();
        return view('frontend/home',$data);
    }
}
