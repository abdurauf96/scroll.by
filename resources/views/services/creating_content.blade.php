@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list services_inner_content">
        <div class="container">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="bread-crumb" data-aos="fade-right" data-aos-delay="400">
                                    <a href="/">  Scroll </a>
                                    <a href="/services"> <span> Услуги  </span> </a>
                                   <span>Создание контента</span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Мы создаем контент для новых, а также уже работающих сайтов&nbsp;</h2> </div>
                    <div class="col-md-4">
                        <div class="sheet"> <img src="/assets/images/img_social.png" alt="" data-aos="fade-left">
                            <p>Уникальный
                                <br /> контент - средство
                                <br /> продвижения сайта</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-target-customers custom">
            <div class="container">
                <div class="row">
                    <div class="block-target-title col-md-12">
                        <div class="block-target-img"> <img src="/img/serv-sheet2.png" alt=""> </div>
                        <h2>Основные компоненты самого <br>
                                «вкусного» контента для сайта</h2> </div>
                </div>
                <div class="block-target-items">
                    <div class="row">
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/kontent-box1.svg')"> </div>
                            <div class="item-info"> Копирайтинг
                                <br> и рерайтинг </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/kontent-box2.svg')"> </div>
                            <div class="item-info"> Переводы
                                <br> текстов </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/kontent-box3.svg')"> </div>
                            <div class="item-info"> Создание
                                <br> иллюстраций </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/kontent-box4.svg')"> </div>
                            <div class="item-info"> 3D
                                <br> моделирование </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/kontent-box5.svg')"> </div>
                            <div class="item-info"> Графический
                                <br>дизайн </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/kontent-box6.svg')"> </div>
                            <div class="item-info"> Фото и видео
                                <br> съемка </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="button-dlock"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content-2">
                <div class="row">
                    <div class="bg_services_inner_seo_3" style="background-image:url('/img/services-content/bg-service-content-gray.png')"></div>
                    <div class="col-sm-6 col-md-6 offset-md-1 block-content-text">
                        <p>Мы заинтересованы в успехе наших клиентов и работаем над тем, чтобы их сайты продавали продукцию или услуги, приносили прибыль, а не просто красовались в просторах сети интернет</p>
                        <h3>Работаем только на результат!</h3> </div>
                </div>
            </div>
        </div>
        <div class="section-sentence">
            <div class="top_line_description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top_line_description wow fadeInUp">
                                <h2 class="pr">Наши работы</h2> </div>
                            <div class="icon-category">
                                <a class="learn-more" href="/portfolio">
                                    <div class="circle-red"> <span class="icon">
                                       <img src="/img/icon/portfolio-icon.png" alt="">
                                     </span> </div>
                                    <p class="button-text">Портфолио</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('projects-component', ['active'=>request()->segment(2)])
        </div>
        @include('sections.form')
    </section>
</div>
@endsection