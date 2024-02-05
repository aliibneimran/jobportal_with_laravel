<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use App\Models\backend\Industry;
use App\Models\backend\Job;
use App\Models\backend\Location;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $data['locations'] = Location::with('job')->get();
        $data['industries'] = Industry::all();
        $data['categories'] = Category::all();
        $data['jobs'] = Job::paginate(3);

        return view('frontend/search',$data); 
    }
}
