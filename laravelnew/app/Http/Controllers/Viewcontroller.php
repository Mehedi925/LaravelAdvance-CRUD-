<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Viewcontroller extends Controller
{
   public function ViewController($id)
   {
      $category = DB::table('categories')->where('id',$id)->first();
      return view('post.category_view')->with('cat',$category);
   }
}
