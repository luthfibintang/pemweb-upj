<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // Logic for the 'home' view or data
        $title = "Home";
        $content = "This is the content of the home page.";

        // Return a view with data
        return view('home', compact('title', 'content'));
    }

    public function about()
    {
        // Logic for the 'home' view or data
        $title = "About";
        $content = "This is the content of the about page.";

        // Return a view with data
        return view('home', compact('title', 'content'));
    }

    public function contact()
    {
        // Logic for the 'home' view or data
        $title = "Contact";
        $content = "This is the content of the contact page.";

        // Return a view with data
        return view('home', compact('title', 'content'));
    }
}
