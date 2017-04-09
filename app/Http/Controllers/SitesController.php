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
        $name = 'jeremy';
        return view('sites.about')->with('name', $name);
    }
}
