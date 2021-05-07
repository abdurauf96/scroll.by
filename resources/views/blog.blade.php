@extends('layouts.app')

@section('content')
<div class="blog_wrapper">
    @include('sections.header')

    <section class="section_blog">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bread-crumb" data-aos="fade-right" data-aos-delay="400">
                            <a href="/">  Scroll </a>
                            
                            <span>Блог </span> 
                        </div>
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
            
            @livewire('blog-component')
            <div id="button"></div>
        </div>
    </section>
    
</div>
@endsection