<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function home()
    {
        $people = ['test', 'dayo', 'foo'];
        return view('welcome', compact('people'));
    }

    public function about()
    {
        return 'about page';
    }

}
