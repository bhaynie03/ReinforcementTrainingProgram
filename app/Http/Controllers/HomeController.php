<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth')->except(['landing']);
    }







    public function landing($value='')
    {

        return view('home.landing', compact('user_id'));
    }
}
