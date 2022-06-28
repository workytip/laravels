<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
   public function index ()
    {
        $admins =  Admin :: get(); // select * from admins


        return view('Admin.index',['data' => $admins]);

    }

    public function create ()
    {
        return view('Admin.create');
    }

    public function store (Request $request)
    {

        $data =  $this->validate($request, [
            'name'     => "required",
            'email'    => "required|email",
            'password' => "required|min:6",
            'image'    => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);


        # Hashing the password before saving it to the database
        $data['password']  = bcrypt($data['password']);


        # Uploading the image to the server
        $imageName = time() . uniqid() . '.' . $request->image->extension();

        $request->image->move(public_path('uploads'), $imageName);

        $data['image'] = $imageName;


        $op =  Admin::create($data);    // insert into users (name,email,passsowrd) values ($data['name'],$data['email'],$data['password'])

        if ($op) {
            $message = "Admin Created Successfully";
            session()->flash('Message-success', $message);
        } else {
            $message = "Admin Not Created";
            session()->flash('Message-error', $message);
        }

        return redirect(url('admin/create'));

    }

}
