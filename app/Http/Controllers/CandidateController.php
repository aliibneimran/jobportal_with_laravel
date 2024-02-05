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
    public function profile(){
        $canDetails = CandidateDetails::all()->where('candidate_id', Auth::guard('candidate')->user()->id)->first();
        $application = Applicant::paginate(3);
        return view('frontend.candidate.profile',compact('canDetails','application'));
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
    public function editProfile(){
        $canDetails = CandidateDetails::all()->where('candidate_id', Auth::guard('candidate')->user()->id)->first();
        return view('frontend.candidate.editProfile',compact('canDetails'));
    } 
    
    public function updateProfile(Request $request){

    $candidate = Candidate::findOrFail(Auth::guard('candidate')->user()->id);
    $data = [
        'name' => $request->name,
        'email' => $request->email,
    ];
    $candidate->update($data);
    
    $validate = $request->validate([
        'photo' => 'mimes:jpg,jpeg,png'
    ]);
    $filename = time() . '.' . $request->photo->extension();
    if($validate){
        $details = [
            'contact' => $request->contact,
            'bio' => $request->bio,
            'address' => $request->address,
            'candidate_id' => $request->candidate_id,
            'image' => $filename,
        ];
    }
    // if(CandidateDetails::create($details)) {
    //     $request->photo->move('uploads', $filename);
    // }
    $candidateDetails = CandidateDetails::where('candidate_id', Auth::guard('candidate')->user()->id)->first();

    if (!$candidateDetails) {
        CandidateDetails::create($details);
    } else {
        $candidateDetails->update($details);
    }
    $request->photo->move('uploads', $filename);
    return redirect()->route('candidate_profile')->with('msg', 'Profile successfully updated');
    }
}
