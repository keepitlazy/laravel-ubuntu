<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        $people = ['Taylor Otwell', 'Jeffray Way', 'Happy Peter'];
        return view('sites.about', compact('people'));
    }

    public function contact()
    {
        return view();
    }
}
