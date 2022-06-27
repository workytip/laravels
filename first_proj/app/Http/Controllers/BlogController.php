<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function create()
    {

        return   view('Blog.create');
    }


    public function store(Request $request)
    {
           $this->validate($request,[

            'title'=>'required|string',
            'content'=>'required|min:50',
            'image'=>'required|file'
           ]);

           $image= $request->file('image');
           $new_name= rand().'.'.$image->getClientOriginalExtension();
           $image->move(public_path('uploads'),$new_name);

        //    $msg='Data and Image uploaded successfully!';

        //    return  view('Blog.create',compact('msg'));

    }
}
