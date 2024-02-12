<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $user = Auth::guard('company')->user();
        if ($user) {
            $payment = Payment::where('company_id', $user->id)->get();
        } elseif (Auth::guard('admin')->check()) {
            $payment = Payment::all();
        } else {
            $payment = [];
        }
        return view('backend.payments.index',compact('payment'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'tnx_number'=> $request->tnx,
            'company_id'=> $request->company_id,
            'package_id'=> $request->package_id,
        ];
        if(Payment::insert($data)){
          return redirect()->route('payments')->with('msg','Successfully Payment');
        }

    }
    public function approve(Request $request ,$id)
    {
        $status = Payment::find($id);

        if ($status) {
            $status->status = 1;
            $status->update();
        
            $companyID = Payment::where('company_id', $request->company)->first();
        
            if ($companyID) {
                Company::where('id', $companyID->company_id)->update(['status' => 1]);
            }
        }        

        return redirect()->back();  
    }
}
