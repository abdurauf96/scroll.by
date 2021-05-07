@extends('layouts.app')

@section('content')
<div class="blog_wrapper">
    @include('sections.header')

    <section class="reviews section_agancy">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bread-crumb" data-aos="fade-right" data-aos-delay="400">
                            <a href="/">  Scroll </a>
                            <a href="/agency"> <span> Агентство </span> </a>
                            <span>Отзывы</span> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="agancy_nav_mnu">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="/agency" class="link">Об агентстве</a></li>
                            <li class="active"><a href="/reviews" class="link">Отзывы</a></li>
                            <li><a href="/vacancy" class="link">Вакансии</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @livewire('review-component')
        <div class="reviews_wrap">
            <div class="reviews_items_add">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev"></div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev">
                            <h2>Хотите, чтобы Ваш отзыв появился на сайте?</h2> </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-md-9">
                                <div class="category_list_bottom">
                                    <button class="btn-circle btn-style-red" href="#reviews-new" data-toggle="modal">Оставить отзыв<span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="button"></div>
        @include('sections.form')
    </section>
    
</div>
@endsection