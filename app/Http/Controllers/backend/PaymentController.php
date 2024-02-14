<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Package;
use App\Models\Payment;
use Carbon\Carbon;
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

    public function approve(Request $request, $id)
    {
        $payment = Payment::find($id);

        if ($payment) {
            $payment->status = 1;
            $payment->save();

            $package = Package::find($payment->package_id);
            if ($package) {
                $company = Company::find($payment->company_id);
                if ($company) {
                    $newLimit = $company->limit + $package->posts;
                    $company->update(['limit' => $newLimit]);

                    $expirationDate = Carbon::parse($payment->updated_at)->addDays(30);
                    $payment->expired_date = $expirationDate;
                    $payment->save();
                }
            }
        }
        return redirect()->back();
    }


}
