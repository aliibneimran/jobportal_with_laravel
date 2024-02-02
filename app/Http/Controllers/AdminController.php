<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
        return view('admin.dashboard');
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
