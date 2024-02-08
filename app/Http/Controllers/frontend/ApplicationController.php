<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Candidate;
use App\Models\frontend\ApplicationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function application(Request $request){
        // dd($request->all());
        
        $validate = $request->validate([
            'cv' => 'mimes:pdf'
        ]);

        $filename = time() . '.' . $request->cv->extension();
        if ($validate) {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'bio' => $request->bio,
                'candidate_id' => $request->candidate_id,
                'job_id' => $request->job_id,
                'company_id' => $request->company_id,
                'cv' => $filename,
            ];
        }
        // dd($data); 
        if (Applicant::create($data)) {
            $request->cv->move('uploads/cv', $filename);
            return redirect()->back()->with('msg', 'Job Successfully Post');
        }
    }
}
