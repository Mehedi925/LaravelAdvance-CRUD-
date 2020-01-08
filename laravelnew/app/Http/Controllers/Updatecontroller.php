<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Updatecontroller extends Controller
{
    public function UpdateController(Request $request,$id)
    {
        //=========== From validation ============
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:3',
            'slug' => 'required|max:25|min:3',
        ]);
        $data =array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category =DB::table('categories')->where('id',$id)->update($data);

//        ==============Alard (tostr) ===========
        if($category){
            $notification = array(
                'messege'=>'Successfully Category Updated',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.category')->with($notification);
        }
        else{
            $notification = array(
                'messege'=>'Nothing to updated',
                'alert-type'=>'error'
            );
            return Redirect()->route('all_category')->with($notification);
        }
    }

}
