<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Slayder;
use \App\Models\Service;
use \App\Models\BlokAbout;
use \App\Models\Review;
use \App\Models\Blog;
use \App\Models\Project;
use \App\Models\ProjectCategory;

class MainController extends Controller
{
    public function index($category=null, $slug=null)
    {
       
        $slayders=Slayder::all();
        $services=Service::all();
        $reviews=Review::where('featured', 1)->orderBy('order')->get();
        $blogs=Blog::where('featured', 1)->orderBy('order')->get();
        $about=BlokAbout::first();
        return view('welcome', compact('slayders', 'services', 'about', 'reviews', 'blogs'));
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

    public function blogDetail($slug)
    {
        $blog=Blog::whereSlug($slug)->first();
        $blogs=Blog::where('category', $blog->category)->where('id', '!=', $blog->id)->get();
        return view('blog_detail', compact('blog', 'blogs'));
    }

    public function portfolio($slug=null)
    {
        if($slug){
            $projectCategory=ProjectCategory::whereSlug($slug)->first();
            $category_id=$projectCategory->id;
            $projects=Project::whereHas('categories', function($q) use($category_id){
                $q->where('project_category_id', $category_id);
            })
            ->orderBy('order')
            ->get();
        }else{
            $projects=Project::orderBy('order')
            ->get();
        }

        $project_categories=ProjectCategory::all();

        return view('portfolio', [
            'projects'=>$projects,
            'project_categories'=>$project_categories    
        ]);
    }

    public function services()
    {
        $services=Service::all();
        return view('services', compact('services'));
    }
}
