<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\backend\Job;
use App\Models\Company;
use App\Models\CompanyDetails;
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
    public function profile(){
        $comDetails = CompanyDetails::all()->where('company_id', Auth::guard('company')->user()->id)->first();
        return view('company.profile',compact('comDetails'));
    }
    public function editProfile(){
        $comDetails = CompanyDetails::all()->where('company_id', Auth::guard('company')->user()->id)->first();
        return view('company.editProfile');
    } 
    
    public function updateProfile(Request $request){
        // dd($request->all());
        $request->validate([
            // 'name' => 'required|string|max:255',
            'email' => 'email|max:255|nullable',
            'old_password' => 'string|min:6|nullable', 
            'new_password' => 'string|min:6|nullable',
            'password_confirmation' => 'same:new_password|min:6|nullable',
        ]);               
        
        $company = Company::findOrFail(Auth::guard('company')->user()->id);
        
        if ($request->filled('old_password')) {
            if (!Hash::check($request->old_password, Auth::guard('company')->user()->password)) {
                return redirect()->back()->withErrors(['old_password' => 'Incorrect old password']);
            }
        }
        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->filled('new_password') ? Hash::make($request->new_password) : $company->password,
        ]);

        
        $validate = $request->validate([
            'profile' => 'nullable|mimes:jpg,jpeg,png',
            'cover' => 'nullable|mimes:jpg,jpeg,png'
        ]);
        $profile = time() . '.' . $request->profile->extension();
        $cover = time() . '.' . $request->cover->extension();
        if($validate){
            $details = [
                'contact' => $request->contact,
                'type' => $request->type,
                'bio' => $request->bio,
                'address' => $request->address,
                'company_id' => $request->company_id,
                'image' => $profile,
                'cover_image' => $cover,
            ];
        }
        $companyDetails = CompanyDetails::where('company_id', Auth::guard('company')->user()->id)->first();

        if (!$companyDetails) {
            CompanyDetails::create($details);
        } else {
            $companyDetails->update($details);
        }
        $request->profile->move('uploads', $profile);
        $request->cover->move('uploads', $cover);
        return redirect()->route('company_profile')->with('msg', 'Profile successfully updated');
    }
}
