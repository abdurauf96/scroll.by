<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Slayder;
use \App\Models\Service;

class MainController extends Controller
{
    public function index($category=null, $slug=null)
    {
       
        $slayders=Slayder::all();
        $services=Service::all();
        return view('welcome', compact('slayders', 'services'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function agency()
    {
        return view('agency');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function vacancy()
    {
        return view('vacancy');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetail()
    {
        return view('blog_detail');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function services()
    {
        $services=Service::all();
        return view('services', compact('services'));
    }
}
