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
                            <div class="top_line_description inner_title">
                                <h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2> <span class="sub_mnu" data-aos="fade-right">Создание контента</span> </div>
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
            <div class="section_wrap_work">
                <div class="block_nav">
                    <ul>
                        <li class="active"><a href="" data-page="portfolio" id="nav" data-other="1" data-name="all">Все</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="1С Битрикс">1С Битрикс</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="smm">smm</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="контекстная реклама">контекстная реклама</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="продвижение сайтов">продвижение сайтов</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="разработка сайтов">разработка сайтов</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="создание контента">создание контента</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="сопровождение сайтов">сопровождение сайтов</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="фирменный стиль">фирменный стиль</a></li>
                    </ul>
                </div>
                <div class="block_content">
                    <div class="row" id="portfolio">
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="http://chicpa.by/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/tm-chicpa-background-min-min.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>TM Chicpa</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали корпоративный сайт торговой марки Chicpa</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="https://isolv.ru" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/isolv-project.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>Isolv</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали сайт
                                                        <br /> Isolv - Автоматизация бизнес процессов</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="http://cx.dpc.by" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/direct-partner1.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>Директ партнер. Бухгалтерия сельскохозяйственного предприятия для Беларуси</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали корпоратинвный сайт компании Директ партнёр.</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="http://krdmo.by/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/krdmo-site.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>Клинический родильный дом Минской области</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали корпоративный сайт УЗ &quot;Клинический родильный дом Минской области&quot;</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="https://slhleb.by/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/glanaya_hleba_rjanye_i_kray3.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>ОАО «Слуцкий Хлебозавод»</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали корпоративный сайт&nbsp;Слуцкого Хлебозавода</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> <span>smm</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="http://buh.dpc.by" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/direct2.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>1C:Бухгалтерия 8</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали сайт компании Директ партнер по 1С: Бухгалтерии</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('sections.form')
    </section>
</div>
@endsection