<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs =  Blog :: get(); // select * from blogs


        return view('blog.index',['data' => $blogs]);
    }


    public function create()
    {

        return   view('Blog.create');
    }


    public function store(Request $request)
    {
           $data=$this->validate($request,[

            'title'=>'required|string',
            'content'=>'required|min:50',
            // 'image'=>'required|file'
           ]);

          $op= Blog::create($data); // insert into blogs table

          if($op){
            $message = "Blog Created Successfully";
            session()->flash('Message-success',$message);
            }else{
            $message = "Blog Not Created";
            session()->flash('Message-error',$message);

                  }

        return redirect(url('Blog/index'));






        //    $image= $request->file('image');
        //    $new_name= rand().'.'.$image->getClientOriginalExtension();
        //    $image->move(public_path('uploads'),$new_name);

        //    $msg='Data and Image uploaded successfully!';

        //    return  view('Blog.create',compact('msg'));

    }
}
