@extends('layouts.app')

@section('content')
<div class="portfolio_wrapper">
    @include('sections.header')

    <section class="section_portfolio">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
                            <h2 class="top_ttle">Портфолио</h2> </div>
                    </div>
                </div>
            </div>
            <div class="agancy_nav_mnu">
                <div class="row">
                    <div class="col-md-12">
                        <ul> </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_wrap_work">
            <div class="block_nav">
                <ul>
                    <li class="{{ request()->segment(2)==null ? 'active': '' }}"><a href="{{ route('portfolio') }}" >Все</a></li>
                    @foreach ($project_categories as $category)
                    <li class="{{ request()->segment(2)==$category->slug ? 'active' : '' }}" ><a href="{{ route('portfolio', $category->slug) }}" id="nav" >{{ $category->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="block_content">
                <div class="row" id="portfolio">
                    @foreach ($projects as $project)
                    <div class="col-sm-12 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <a href="{{ $project->url }}" target="_blank" rel="nofollow" class="portfolio-item-link">
                            <div class="block_item"> <img src="{{ Voyager::image($project->image) }}" alt="">
                                <div class="overlay"></div>
                                <div class="block_inner_wrapper">
                                    <div class="block_inner_text">
                                        <div class="top">
                                            <h2>{{ $project->title }}</h2> </div>
                                        <div class="absolute">
                                            <p class="transparent">
                                                <p>{{ $project->description }}</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="block_tags"> @foreach ($project->categories as $cat)
                                    <span>{{ $cat->title }}</span> 
                                @endforeach </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('sections.form')
</div> 
@endsection