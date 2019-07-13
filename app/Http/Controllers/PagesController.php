<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        $title = "Welcome to blog";
        return view('pages.index')->with('title', $title);
    }

    public function about() 
    {
        $title = "About Blog";
        return view('pages.about')->with('title', $title);
    }

}
