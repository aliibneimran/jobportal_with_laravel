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
    public function index(Request $request){
        // $locations = Location::all();
        // $industries= Industry::all();
        // $categories = Category::all();
        // if($request->filled('search')){
        //     $jobs = Job::
        //      join('categories', 'jobs.category_id', '=', 'categories.id')
        //     ->join('locations', 'jobs.location_id', '=', 'locations.id')
        //     ->join('industries', 'jobs.industry_id', '=', 'industries.id')
        //     ->where('categories.name', 'like', '%' . $request->search . '%')
        //     ->orWhere('locations.name', 'like', '%' . $request->search . '%')
        //     ->orWhere('industries.name', 'like', '%' . $request->search . '%')
        //     ->orWhere('title', 'like', '%' . $request->search . '%')
        //     ->orWhere('description', 'like', '%' . $request->search . '%')
        //     ->orWhere('salary', 'like', '%' . $request->search . '%')
        //     ->orWhere('tag', 'like', '%' . $request->search . '%')
        //     ->get();
        // }else{
        //     $jobs = Job::all();
        // }
        // return view('frontend/home', compact('jobs','locations','industries','categories'));

        $data['locations'] = Location::with('job')->get();
        $data['jobs'] = Job::paginate(3);
        $data['locations'] = Location::paginate(4);
        $data['industries'] = Industry::all();
        $data['categories'] = Category::all();
        return view('frontend/home',$data);
    }

}
