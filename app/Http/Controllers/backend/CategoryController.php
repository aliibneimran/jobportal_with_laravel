<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['catagories'] = Category::all();
        $data['totalCategory'] = Category::count(); 
        return view('backend.categories.index',$data);
    }
    public function create()
    {
        return view('backend.categories.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $data = [
            'name'=> $request->name,
            'description'=> $request->description,
        ];
        if(Category::insert($data)){
          return redirect()->route('categories.index')->with('msg','Successfully Added');
        }
    }
    public function edit($id)
    {
        $category = Category::find($id);
        $data['single'] = $category;
        return view('backend.categories.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $data = [
            'name'=> $request->name,
            'description'=> $request->description,
        ];
        $category->update($data);
        return redirect()->route('categories.index')->with('msg', 'Successfully Update'); 
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete($id);
        return redirect()->route('categories.index')->with('msg', 'Successfully Deleted'); 

    }
}
