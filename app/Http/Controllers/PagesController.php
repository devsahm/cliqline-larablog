<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
