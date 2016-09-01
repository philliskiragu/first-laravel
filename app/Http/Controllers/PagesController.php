<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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
