<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Allcontroller extends Controller
{
    public function AllCategory()
    {
        $category = DB::table('categories')->get();
        return view('post.all_category',compact('category'));
    }

}
