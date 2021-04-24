<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function siteDevelopment()
    {
        return view('services.site_development');
    }

    public function seo()
    {
        return view('services.seo');
    }

    public function reklama()
    {
        return view('services.reklama');
    }

    public function smm()
    {
        return view('services.smm');
    }

    public function design()
    {
        return view('services.design');
    }

    public function support()
    {
        return view('services.support');
    }

    public function creatingContent()
    {
        return view('services.creating_content');
    }
    
    public function protectBrand()
    {
        return view('services.protect_brand');
    }

    public function bitriks()
    {
        return view('services.bitriks');
    }
}
