<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Editcontroller extends Controller
{
    public function EditController($id)
    {
        $category = DB::table('categories')->where('id',$id)->first();
        return view('post.edit_post',compact('category'));
    }
}
