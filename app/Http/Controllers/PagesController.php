<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\clientMessage;

class PagesController extends Controller
{
    public function index()
    {
        return view('cliq.index');
    }

    public function aboutus()
    {
    	return view('cliq.about-us');
    }

    public function newsblog()
    {
    	return view('cliq.blog');
    }

    public function details()
    {
    	return view('cliq.blog-content');
    }

      public function contact()
    {
    	return view('cliq.contact');
    }

       public function clientEmail(Request $request)
    {
    $this->validate($request, [
        'name'=>'required|min:5',
        'email'=>'required',
        'message'=>'required',
    ]);

    $name=$request->name;
    $email=$request->email;
    $message=$request->message;

    Mail::to('fagbenrosamuel@gmail.com')->send(new clientMessage($name, $email, $message));
    return back()->with('success', 'Your message was sent successfully');  
    }
    

}
