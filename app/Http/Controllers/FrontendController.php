<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(Request $request)
    {

        return view('frontend.pages.index');
    }

    public function aboutUs(Request $request)
    {

        return view('frontend.pages.about');
    }
    public function listing()
    {

        return view('frontend.pages.listing');
    }
}
