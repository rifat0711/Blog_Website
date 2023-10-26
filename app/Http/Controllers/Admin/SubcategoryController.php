<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use DB;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    //___Create Method____//

    public function index() {
        //__Query bilder__//
        // $category=DB::table('categories')->get();


        // $data= DB::table('subcategories')->leftjoin('ategories','subcategories.category_id','categories_id')->get();
        // return response()->json($data);
        // dd($data);


        //__Eloquent__//
        $subcategory=Category::all();
        return view('admin.subcategory.index',compact('subcategory'));
    
    }
    public function create() {
        $categories=Category::all();
        return view('admin.subcategory.create',compact('categories'));
    
        
    }
    public function store(Request $request) {
        //return view('admin.category.store');
        $validated = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required|unique:subcategories|max:255',
        ]);
        $subcategory=new Subcategory;
        $subcategory->category_id= $request->category_id;
        $subcategory->subcategory_name= $request->subcategory_name;
        $subcategory->subcategory_slug= Str::of($request->subcategory_name)->slug('-');
        $subcategory->save();
        $notification=array('meaasge' => 'Sub Category Inserted', "alert-type" =>'success');
        return redirect()->back()->with($notification);
   

    }
}