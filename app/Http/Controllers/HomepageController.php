<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function show_homepage()
    {
        return view('homepage.index');
    }
}
