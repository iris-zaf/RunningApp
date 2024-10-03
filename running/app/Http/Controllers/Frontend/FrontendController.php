<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(): View
    {
        return view('frontend.home.index');
    }

    function about(): View
    {
        return view('frontend.home.components.about');
    }
    function blog_details(): View
    {
        return view('frontend.home.components.blog_details');
    }
    function contact(): View
    {
        return view('frontend.home.components.contact');
    }
}
