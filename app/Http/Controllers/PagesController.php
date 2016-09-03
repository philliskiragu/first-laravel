<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PagesController extends Controller
{
    // Method about that renders the about view
    public function about()
    {
        $name = "Phillis";
        return view('pages.about', compact('name'));
//        return view('pages.about')->with('name', $name);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
