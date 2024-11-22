<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Logic for the 'home' view or data
        $title = "Welcome to the Home Page";
        $content = "This is the content of the home page.";

        // Return a view with data
        return view('home', compact('title', 'content'));
    }
}
