@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bread-crumb" data-aos="fade-right" data-aos-delay="400">
                            <a href="/">  Scroll </a>
                           
                            <span>Услуги </span> 
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
            <div class="services_list_wrapper">
                <div class="row">
                    @foreach ($services as $service)
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/service/{{ $service->url }}">
                                <div class="img-wrap"> <img src="{{ Voyager::image($service->image_onpage) }}" alt="{{ $service->image_alt }}" title="{{ $service->image_title }}" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/service/{{ $service->url }}" class="title link">{{ $service->title }}</a></h2> </div>
                    </div>
                    @endforeach
                    
                    <div class="col-12">
                        <button class="btn-circle btn-style-red" href="#request" data-toggle="modal">Обсудить проект<span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection