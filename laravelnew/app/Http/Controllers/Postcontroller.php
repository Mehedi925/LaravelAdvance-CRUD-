<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class Postcontroller extends Controller
{
    public function WritePost()
    {
        $category=DB::table('categories')->get();
        return view('post.writepost',compact('category'));
    }
    public function StoreCategory(Request $request)
    {
        //=========== From validation ============
        $validatedData = $request->validate([
            'title' => 'required|max:25',
            'details' => 'required|max:500|min:3',
            'image' => 'required|mimes:jpeg,jpg,png,gif,PNG|required|max:10000',
        ]);
        $data=array();
        $data['title']=$request->title;
        $data['categories_id']=$request->categories_id;
        $data['details']=$request->details;
        $image=$request->file('image');
        if ($image)
        {
            $image_name = Str::random(5);
            $ext= strtolower($image->getClientOriginalExtension());
            $image_full_name= $image_name.'.'.$ext;
            $upload_path='public/frontend/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('posts')->insert($data);
            $notification = array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);


        }
        else
        {
            DB::table('posts')->insert($data);
            $notification = array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }

    }
    public function AllPost()
    {
        $post=DB::table('posts')
            ->join('categories','posts.categories_id','categories.id')
            ->select('posts.*','categories.name')->get();
        return view('post.allpost',compact('post'));

    }
    public function ViewPost($id)
    {
        $post=DB::table('posts')->join('categories','posts.categories_id','categories.id')
            ->select('posts.*','categories.name')
            ->where('posts.id',$id)
            ->first();
        return view('post.viewpost',compact('post'));
//        return response()->json($post);

    }




}
