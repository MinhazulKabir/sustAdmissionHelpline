<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return view('about');
    }
	public function aboutApp(Request $request)
    {
        return view('aboutApp');
    }
}
