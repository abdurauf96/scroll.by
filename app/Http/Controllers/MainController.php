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
use \App\Models\Client;
use \App\Models\Vacancy;
use \App\Models\HomePage;
use \App\Models\ContactPage;
use \App\Models\BlogPage;
use \App\Models\BlogDetailPage;
use \App\Models\ServicePage;
use \App\Models\AgencyPage;
use \App\Models\ReviewPage;
use \App\Models\PortfolioPage;
use \App\Models\VacancyPage;
use MetaTag;
class MainController extends Controller
{
    public function index($category=null, $slug=null)
    {
       
        $slayders=Slayder::all();
        $clients=Client::orderBy('order')->get();
        $services=Service::all();
        $reviews=Review::where('featured', 1)->orderBy('order')->get();
        $blogs=Blog::where('featured', 1)->orderBy('order')->get();
        $about=BlokAbout::first();

        $homepage=HomePage::first();
        MetaTag::set('title', $homepage->title);
        MetaTag::set('description', $homepage->meta_description);
        MetaTag::set('keywords', $homepage->meta_keywords);
        
        return view('welcome', compact('slayders', 'services', 'about', 'reviews', 'blogs', 'clients'));
    }

    public function contact()
    {
        $link=\App\Models\Link::first();

        $page=ContactPage::first();
        if($page){
        	MetaTag::set('title', $page->meta_title);
	        MetaTag::set('description', $page->meta_description);
	        MetaTag::set('keywords', $page->meta_keywords);
        }
        
        return view('contact', compact('link'));
    }

    public function agency()
    {
        $page=AgencyPage::first();
        if($page){
        	MetaTag::set('title', $page->meta_title);
	        MetaTag::set('description', $page->meta_description);
	        MetaTag::set('keywords', $page->meta_keywords);
        }
       
        return view('agency');
    }

    public function reviews()
    {
        $page=ReviewPage::first();
       if($page){
        	MetaTag::set('title', $page->meta_title);
	        MetaTag::set('description', $page->meta_description);
	        MetaTag::set('keywords', $page->meta_keywords);
        }
        return view('reviews');
    }

    public function vacancy()
    {
        $page=VacancyPage::first();
        if($page){
        	MetaTag::set('title', $page->meta_title);
	        MetaTag::set('description', $page->meta_description);
	        MetaTag::set('keywords', $page->meta_keywords);
        }
        $vacancies=Vacancy::all();
        return view('vacancy', compact('vacancies'));
    }

    public function blog()
    {
        $page=BlogPage::first();
        if($page){
        	MetaTag::set('title', $page->meta_title);
	        MetaTag::set('description', $page->meta_description);
	        MetaTag::set('keywords', $page->meta_keywords);
        }
        return view('blog');
    }

    public function blogDetail($slug)
    {
        $blog=Blog::whereSlug($slug)->first();
        if(!$blog){
            abort(404);
        }
        $blogs=Blog::where('category', $blog->category)->where('id', '!=', $blog->id)->get();

        MetaTag::set('title', $blog->meta_title);
        MetaTag::set('description', $blog->meta_description);
        MetaTag::set('keywords', $blog->meta_keywords);
        
        return view('blog_detail', compact('blog', 'blogs'));
    }

    public function portfolio($slug=null)
    {
        if($slug){
            $projectCategory=ProjectCategory::whereSlug($slug)->first();
            if(!$projectCategory){
                abort(404);
            }
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
        $page=PortfolioPage::first();
        if($page){
        	MetaTag::set('title', $page->meta_title);
	        MetaTag::set('description', $page->meta_description);
	        MetaTag::set('keywords', $page->meta_keywords);
        }
        return view('portfolio', [
            'projects'=>$projects,
            'project_categories'=>$project_categories    
        ]);
    }

    public function services()
    {
        $services=Service::all();
<<<<<<< HEAD
        //$page=ServicePage::first();
        // MetaTag::set('title', $page->meta_title);
        // MetaTag::set('description', $page->meta_description);
        // MetaTag::set('keywords', $page->meta_keywords);
=======
        $page=ServicePage::first();
        if($page){
        	MetaTag::set('title', $page->meta_title);
	        MetaTag::set('description', $page->meta_description);
	        MetaTag::set('keywords', $page->meta_keywords);
        }
>>>>>>> 83038c117240c8a10558baed55041c1aa0ee6224
        return view('services', compact('services'));
    }
    
}
