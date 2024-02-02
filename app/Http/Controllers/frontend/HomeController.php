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
        $data['locations'] = Location::with('job')->get();
        $data['jobs'] = Job::latest()->take(3)->get();
        $data['locations'] = Location::latest()->take(4)->get();
        $data['industries'] = Industry::all();
        $data['categories'] = Category::all();
        return view('frontend/home',$data);
    }
}
