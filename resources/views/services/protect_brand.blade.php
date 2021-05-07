@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list services_inner_protection">
        <div class="container">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="bread-crumb" data-aos="fade-right" data-aos-delay="400">
                                <a href="/">  Scroll </a>
                                <a href="/services"> <span> Услуги  </span> </a>
                               <span>Защита бренда в сети интернет</span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Комплексная защита вашего бренда<br />в сети интернет</h2>
                        <h3>Пресекаем распространение &laquo;серого&raquo; импорта, ликвидируем<br />незаконное использование товарных знаков в доменных<br />именах и блокируем предложения о продаже контрафакта.</h3> </div>
                    <div class="col-md-4">
                        <div class="sheet"> <img src="/assets/images/img_protection.png" alt="" data-aos="fade-left">
                            <p>Уникальная
                                <br /> технология поиска нарушений в сети</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="button-dlock"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                </div>
            </div>
        </div>
        <div class="block-target-customers custom">
            <div class="bg_line_top" style="background-image: url('/img/linnear_bg_serv.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="block-target-title col-md-12">
                        <h2>Чем мы будем полезны для вашего бренда?</h2> </div>
                </div>
                <div class="block-target-items">
                    <div class="row">
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/brand-1.svg')"> </div>
                            <div class="item-info"> Остановка размещений
                                <br> недобросовестной рекламы </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/brand-2.svg')"> </div>
                            <div class="item-info"> Решение проблемы
                                <br> «серого» импорта </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/brand-3.svg')"> </div>
                            <div class="item-info"> Нейтрализуем
                                <br> e-commerce угрозы </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/brand-4.svg')"> </div>
                            <div class="item-info"> Легализация
                                <br> каналов продаж </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/brand-5.svg')"> </div>
                            <div class="item-info"> Контроль за использованием
                                <br> товарных знаков в доменах </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/brand-6.svg')"> </div>
                            <div class="item-info"> Блокировка предложений
                                <br> контрафактной продукции в интернете </div>
                        </div>
                    </div>
                    <div class="bg_services_inner_protection" style="background-image:url('/img/bg_services_inner_protection.png')"></div>
                </div>
            </div>
        </div>
        <div class="principle-work">
            <div class="bg_line_top" style="background-image: url('/img/linnear_bg_bottom.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 row-middle">
                        <div class="principle-work-list">
                            <h2 class="wow fadeInUp" data-wow-delay=".1s" data-wow-duration="2s">Принцип работ</h2>
                            <p class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="2s">Наши технологии непрерывно сканируют основные каналы
                                <br>распространения продукции, находят все нарушения и оперативно реагируют на них</p>
                        </div>
                    </div>
                    <div class="col-md-6 principle-work-bg wow fadeInRight" data-wow-delay=".5s" data-wow-duration="2s"> <img src="/assets/images/robot_services_inner_protection.png" alt=""> </div>
                </div>
                <div class="block-scheme">
                    <div class="block-scheme-first">
                        <div class="row">
                            <div class="col-md-12 row-center">
                                <div class="block-scheme-item gray" data-aos="flip-left">
                                    <p>Регулярный мониторинг сайтов и площадок</p>
                                </div>
                            </div>
                            <div class="col-md-12 row-center">
                                <div class="arrow-scheme"> <i class="fal fa-long-arrow-down"></i> </div>
                            </div>
                            <div class="col-md-12 row-center">
                                <div class="block-scheme-item gray" data-aos="flip-left">
                                    <p>Регулярный мониторинг сайтов и площадок</p>
                                </div>
                            </div>
                            <div class="col-md-12 row-center">
                                <div class="arrow-scheme"> <i class="fal fa-long-arrow-down"></i> </div>
                            </div>
                            <div class="col-md-12 row-center">
                                <div class="row">
                                    <div class="block-scheme-item gray work-host" data-aos="fade-right">
                                        <p>Работа с хостинг провайдером, площадкой, подключение юридических инструментов</p>
                                    </div>
                                    <div class="arrow-scheme arrow-now">
                                        <p class="arrow-text-red">Если Нет</p> <i class="fal fa-long-arrow-left"></i> </div>
                                    <div class="block-scheme-item pink item-one" data-aos="flip-left">
                                        <p>Диалог на предмет устранения нарушений</p>
                                    </div>
                                    <div class="arrow-scheme arrow-yes">
                                        <p class="arrow-text-green">Если Да</p> <i class="fal fa-long-arrow-right"></i> </div>
                                    <div class="block-scheme-item green res-success" data-aos="fade-left">
                                        <p>Результат достигнут</p> <span class="check"><i class="fal fa-check"></i></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-scheme-two">
                        <div class="row">
                            <div class="col-md-4 row-center">
                                <div class="arrow-scheme arrow-down"> <i class="fal fa-long-arrow-down"></i> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 row-center">
                                <div class="block-scheme-item green res-success-2" data-aos="flip-left">
                                    <p>Результат достигнут</p> <span class="check"><i class="fal fa-check"></i></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section our_works">
            <div class="top_line_description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top_line_description">
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
            @livewire('projects-component', ['active'=>'all'])
        </div>
        <div class="section section_our_clients">
            <div class="top_line_description" style="margin-bottom: 110px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-10">
                            <div class="top_line_description wow fadeInUp">
                                <h2>Нам доверили защиту своего бренда</h2> </div>
                        </div>
                        <!-- <div class="work_img">
                                <a href="#">
                                    <img src="img/portfolio.png" alt="">
                                </a>
                            </div> --></div>
                </div>
            </div>
            <div class="our_clients_main">
                <div class="slider_our_clients" dir="rtl">
                    <div class="our_clients_item"> <img src="/assets/images/flavia_logo.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/fornelli-logo.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/partners.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/logo-atlant.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/novalux-logo-fin.svg" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/logo-ibolit.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/logo-chicpa.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/logo-belcredo.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/logo-adams-min.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/logo_welcom.jpg" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/header_logo123.png" alt=""> </div>
                    <div class="our_clients_item"> <img src="/assets/images/logo-krona.png" alt=""> </div>
                </div>
            </div>
        </div>
        @include('sections.form')
    </section>
</div>
@endsection