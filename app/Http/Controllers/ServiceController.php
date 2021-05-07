<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use MetaTag;
class ServiceController extends Controller
{
    public function siteDevelopment()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
       
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.site_development');
    }

    public function seo()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.seo');
    }

    public function reklama()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.reklama');
    }

    public function smm()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.smm');
    }

    public function design()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.design');
    }

    public function support()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.support');
    }

    public function creatingContent()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.creating_content');
    }
    
    public function protectBrand()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.protect_brand');
    }

    public function bitriks()
    {
        $url=request()->segment(2);
        $service=Service::where('url', $url)->first();
        MetaTag::set('title', $service->meta_title);
        MetaTag::set('description', $service->meta_description);
        MetaTag::set('keywords', $service->meta_keywords);
        return view('services.bitriks');
    }

    public function viewService($slug)
    {
        $parent_service=Service::where('url', $slug)->first();
        if(!$parent_service){
            abort(404);
        }
        MetaTag::set('title', $parent_service->meta_title);
        MetaTag::set('description', $parent_service->meta_description);
        MetaTag::set('keywords', $parent_service->meta_keywords);
        $service=\App\Models\ServiceDetail::where('service_id', $parent_service->id)->first();
        
        return view('services.viewService', compact('service'));
    }
}
