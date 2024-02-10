<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyDetails;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package = Package::all();
        return view('backend.packages.index',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            'name'=> $request->name,
            'price'=> $request->price,
            'posts'=> $request->posts,
            'description'=> $request->description,
        ];
        if(Package::insert($data)){
          return redirect()->route('packages.index')->with('msg','Successfully Added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $package = Package::find($id);
        $company = CompanyDetails::first();
        return view('backend.payments.create',compact('package','company'));    
        // return view('backend.packages.index',compact('package'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Package::find($id);
        return view('backend.packages.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $package = Package::find($id);
        $data = [
            'name'=> $request->name,
            'price'=> $request->price,
            'posts'=> $request->posts,
            'description'=> $request->description,
        ];
        $package->update($data);
        return redirect()->route('packages.index')->with('msg', 'Successfully Update'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::find($id);
        $package->delete($id);
        return redirect()->route('packages.index')->with('msg', 'Successfully Deleted');
    }
}
