@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
                            <h2 class="top_ttle">Услуги</h2> </div>
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
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/servies_webdevel?filter=разработка сайтов">
                                <div class="img-wrap"> <img src="/assets/images/saity.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/servies_webdevel?filter=разработка сайтов" class="title link">Разработка сайтов</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/services_seo?filter=продвижение сайтов">
                                <div class="img-wrap"> <img src="/assets/images/seo.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/services_seo?filter=продвижение сайтов" class="title link">SEO продвижение</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/service_blog?filter=контекстная реклама">
                                <div class="img-wrap"> <img src="/assets/images/context.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/service_blog?filter=контекстная реклама" class="title link">Контекстная реклама в Яндекс и Google</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/services_social?filter=smm">
                                <div class="img-wrap"> <img src="/assets/images/smm.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/services_social?filter=smm" class="title link">Продвижение в социальных сетях (SMM)</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/service_design?filter=фирменный стиль">
                                <div class="img-wrap"> <img src="/assets/images/branding.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/service_design?filter=фирменный стиль" class="title link">Фирменный стиль и дизайн</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/services_support">
                                <div class="img-wrap"> <img src="/assets/images/tech.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/services_support" class="title link">Техническая поддержка</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/services_content">
                                <div class="img-wrap"> <img src="/assets/images/content.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/services_content" class="title link">Создание контента</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/services_protection">
                                <div class="img-wrap"> <img src="/assets/images/zashita.svg" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/services_protection" class="title link">Защита бренда в сети интернет</a></h2> </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="list_wrapper_nav services_2" data-aos="fade-up">
                            <a href="/servies_webdevel_bitrix_crm">
                                <div class="img-wrap"> <img src="/assets/images/crm-bitrix.png" alt="" class="first first-one">
                                    <div class="bg-circl"></div>
                                    <!--  <img src="/img/paralax/bg-svg-1.svg" alt="" class="first first-two">
                                                <img src="/img/paralax/bg-svg-2.svg" alt="" class="first first-thri"> --></div>
                            </a>
                            <h2><a href="/servies_webdevel_bitrix_crm" class="title link">Внедрение CRM «Битрикс24»</a></h2> </div>
                    </div>
                    <div class="col-12">
                        <button class="btn-circle btn-style-red" href="#request" data-toggle="modal">Обсудить проект<span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection