<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $candidate = Candidate::all();
        return view('frontend.candidate.profile',compact('candidate'));
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

        return redirect()->route('candidate_profile');
        
    }
    public function editProfile(){
        return view('frontend.candidate.editProfile');
    } 
    
    public function updateProfile(Request $request){

    $candidate = Candidate::findOrFail(Auth::guard('candidate')->user()->id);
    $validate = $request->validate([
        'photo' => 'mimes:jpg,jpeg,png'
    ]);
    
    if (!$validate) {
        return redirect()->route('candidate_profile')->withErrors($validate);
    }
    $filename = time() . '.' . $request->photo->extension();
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'contact' => $request->contact,
        'bio' => $request->bio,
        'address' => $request->address,
        'candidate_id' => $request->candidate_id,
        'image' => $filename,
    ];
    $candidate->update($data);
    $request->photo->move('uploads/candidate', $filename);
    return redirect()->route('candidate_profile')->with('msg', 'Profile successfully updated');
    }


}
