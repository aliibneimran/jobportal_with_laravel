<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $data['locations'] = Location::all();
        $data['totalLocation'] = Location::count(); 
        return view('backend.locations.index',$data);
    }
    public function create()
    {
        return view('backend.locations.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $data = [
            'name'=> $request->name,
            'description'=> $request->description,
        ];
        if(Location::insert($data)){
          return redirect()->route('locations.index')->with('msg','Successfully Added');
        }
    }
    public function edit($id)
    {
        $Location = Location::find($id);
        $data['single'] = $Location;
        return view('backend.locations.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $Location = Location::find($id);
        $data = [
            'name'=> $request->name,
            'description'=> $request->description,
        ];
        $Location->update($data);
        return redirect()->route('locations.index')->with('msg', 'Successfully Update'); 
    }
    public function destroy($id)
    {
        $Location = Location::find($id);
        $Location->delete($id);
        return redirect()->route('locations.index')->with('msg', 'Successfully Deleted'); 

    }
}
