<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class BaseController extends Controller
{
    public function index()
    {
        $posts = post::all();
        return view('index', compact('posts'));
    }
    public function funpage()
    {
        $posts = post::all();
        return view('rute', compact('posts'));
    }
    public function rutePage()
    {
        $posts = post::all();
        return view('rutes', compact('posts'));
    }
    public function service(Post $posts)
    {
        $posts = post::all();
        return view('service', compact('posts'));
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function about_us()
    {
        $posts = post::all();
        return view('about-us', compact('posts'));
    }
    public function contact()
    {
        return view('contact');
    }
}
