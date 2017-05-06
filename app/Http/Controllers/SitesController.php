<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    //

    public function index()
    {
        return view('pages.welcome');
    }

    public function about()
    {
        $people = ['Taylor Otwell', 'Jeffray Way', 'Happy Peter'];
        return view('pages.about', compact('people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
