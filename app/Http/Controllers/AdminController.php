<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Applicant;
use App\Models\backend\Category;
use App\Models\backend\Industry;
use App\Models\backend\Job;
use App\Models\backend\Location;
use App\Models\Candidate;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function login(Request $request){
        // dd($request->all());
        if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect()->route('admin_dashboard');
        }else{
            return redirect()->back()->with('msg','Please enter currect email and password');
        }
    }
    public function dashboard(){
        $data['totalJobs'] = Job::count();
        $data['totalLocations'] = Location::count();
        $data['totalIndustries'] = Industry::count();
        $data['totalCategories'] = Category::count();
        $data['totalCompany'] = Company::count();
        $data['totalApplicant'] = Applicant::count();
        $data['totalUser'] = Candidate::count();
        return view('admin.dashboard',$data);
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login_form');
    }
    public function register(){
        return view('admin.register');
    }
    public function registration(Request $request){  
        $admin = Admin::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        Auth::guard('admin')->login($admin);

        return redirect()->route('admin_dashboard');
        
    }
}
