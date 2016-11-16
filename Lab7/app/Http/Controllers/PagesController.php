<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//
//use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Scott','Rafael','Ashlie'];

        return view('welcome', compact('people'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
