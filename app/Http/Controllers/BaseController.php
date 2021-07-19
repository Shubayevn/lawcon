<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function service()
    {
        return view('service');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function about_us()
    {
        return view('about-us');
    }
    public function contact()
    {
        return view('contact');
    }
}
