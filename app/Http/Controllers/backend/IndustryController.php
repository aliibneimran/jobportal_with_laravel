<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $data['industries'] = Industry::all();
        $data['totalIndutry'] = Industry::count(); 
        return view('backend.industries.index',$data);
    }
    public function create()
    {
        return view('backend.industries.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $data = [
            'name'=> $request->name,
            'description'=> $request->description,
        ];
        if(Industry::insert($data)){
          return redirect()->route('industries.index')->with('msg','Successfully Added');
        }
    }
    public function edit($id)
    {
        $Industry = Industry::find($id);
        $data['single'] = $Industry;
        return view('backend.industries.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $Industry = Industry::find($id);
        $data = [
            'name'=> $request->name,
            'description'=> $request->description,
        ];
        $Industry->update($data);
        return redirect()->route('industries.index')->with('msg', 'Successfully Update'); 
    }
    public function delete($id)
    {
        $Industry = Industry::find($id);
        $Industry->delete($id);
        return redirect()->route('industries.index')->with('msg', 'Successfully Deleted'); 

    }
}
