<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use MetaTag;
class ServiceController extends Controller
{
    public function siteDevelopment()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.site_development');
    }

    public function seo()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.seo');
    }

    public function reklama()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.reklama');
    }

    public function smm()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.smm');
    }

    public function design()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.design');
    }

    public function support()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.support');
    }

    public function creatingContent()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.creating_content');
    }
    
    public function protectBrand()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.protect_brand');
    }

    public function bitriks()
    {
        $url='/'.request()->path();
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.bitriks');
    }
}
