<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Deletecontroller extends Controller
{
   public function DeleteController($id)
   {
       $delete=DB::table('categories')->where('id',$id)->delete();


           $notification = array(
               'messege'=>'Successfully Category Deleted',
               'alert-type'=>'success'
           );
           return Redirect()->back()->with($notification);


   }
}
