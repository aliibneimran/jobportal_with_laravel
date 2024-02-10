<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\DemoMail;
use App\Models\Applicant;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
{
    public function index(){
        return view('frontend.candidate.index');
    }
    public function login(Request $request){
        // dd($request->all());
        if(Auth::guard('candidate')->attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect()->route('candidate_profile');
        }else{
            return redirect()->back()->with('msg','Please enter currect email and password');
        }
    }
    public function logout(){
        Auth::guard('candidate')->logout();
        return redirect()->route('candidate_login_form');
    }
    public function register(){
        return view('frontend.candidate.register');
    }
    public function registration(Request $request){
        // dd($request->all());
        $candidate = Candidate::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        Auth::guard('candidate')->login($candidate);

        
        // $mailData = [
        //     'title' => 'Success Register',
        //     'body' => 'Please Complete Your Profile',
        // ];
        // Mail::to('aliibneimran1996@gmail.com')->send(new DemoMail($mailData));
        return redirect()->route('candidate_profile');
        
    }
    public function profile(){
        $canDetails = CandidateDetails::all()->where('candidate_id', Auth::guard('candidate')->user()->id)->first();
        $application = Applicant::paginate(3);
        return view('frontend.candidate.profile',compact('canDetails','application'));
    }
    public function editProfile(){
        $canDetails = CandidateDetails::all()->where('candidate_id', Auth::guard('candidate')->user()->id)->first();
        return view('frontend.candidate.editProfile',compact('canDetails'));
    } 
    
    public function updateProfile(Request $request){

        $request->validate([
            'name' => 'string|max:255|nullable',
            'email' => 'email|max:255|nullable',
            'old_password' => 'string|min:6|nullable', 
            'new_password' => 'string|min:6|nullable',
            'password_confirmation' => 'same:new_password|min:6|nullable',
        ]);               
        
        $candidate = Candidate::findOrFail(Auth::guard('candidate')->user()->id);
        
        if ($request->filled('old_password')) {
            if (!Hash::check($request->old_password, Auth::guard('candidate')->user()->password)) {
                return redirect()->back()->withErrors(['old_password' => 'Incorrect old password']);
            }
        }
        $candidate->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->filled('new_password') ? Hash::make($request->new_password) : $candidate->password,
        ]);

        
        $request->validate([
            'photo' => 'nullable|mimes:jpg,jpeg,png'
        ]);
        $details = [
            'contact' => $request->contact,
            'bio' => $request->bio,
            'address' => $request->address,
            'candidate_id' => $request->candidate_id,
        ];
        if ($request->hasFile('profile')) {
            $profile = time() . '.' . $request->file('profile')->extension();
            $details['image'] = $profile;
            $request->file('profile')->move('uploads', $profile);
        }
        $candidateDetails = CandidateDetails::where('candidate_id', Auth::guard('candidate')->user()->id)->first();

        if (!$candidateDetails) {
            CandidateDetails::create($details);
        } else {
            $candidateDetails->update($details);
        }
        return redirect()->route('candidate_profile')->with('msg', 'Profile successfully updated');
    }


}
