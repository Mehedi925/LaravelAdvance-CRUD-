<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Addcontroller extends Controller
{
    public function AddCategory()
    {
        return view('post.add_category');
    }

    public function StoreCategory(Request $request)
    {
        //=========== From validation ============
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:25|min:3',
            'slug' => 'required|unique:categories|max:25|min:3',
        ]);
        // ============Insert data==========
        $data =array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category =DB::table('categories')->insert($data);
//        return response()->json($data);
//        echo "<pre>";
//        print_r($data);

//        ==============Alard (tostr) ===========
        if($category){
            $notification = array(
                'messege'=>'Successfully Category Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.category')->with($notification);
        }
        else{
            $notification = array(
                'messege'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }

    }
}

