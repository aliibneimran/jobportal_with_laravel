<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\backend\Job;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function index(){
        return view('company.index');
    }
    public function login(Request $request){
        // dd($request->all());
        if(Auth::guard('company')->attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect()->route('company_dashboard');
        }else{
            return redirect()->back()->with('msg','Please enter currect email and password');
        }
    }
    public function dashboard(){
        $data['totalJobs'] = Job::where('company_id', Auth::guard('company')->user()->id)->count();
        $data['totalApplicant'] = Applicant::where('company_id', Auth::guard('company')->user()->id)->count();
        $data['totalApprove'] = Applicant::where('company_id', Auth::guard('company')->user()->id)->where('status', 1)->count();
        $data['totalPending'] = Applicant::where('company_id', Auth::guard('company')->user()->id)->where('status', 0)->count();

        return view('company.dashboard',$data);
    }
    public function logout(){
        Auth::guard('company')->logout();
        return redirect()->route('company_login_form');
    }
    public function register(){
        return view('company.register');
    }
    public function registration(Request $request){  
        $company = Company::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        Auth::guard('company')->login($company);

        return redirect()->route('company_dashboard');
        
    }
}
