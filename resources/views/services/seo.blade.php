@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list services_inner_seo">
        <div class="container">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="top_line_description inner_title">
                                <h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2> <span class="sub_mnu" data-aos="fade-right">SEO-продвижение</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Поисковое продвижение сайтов (SEO)</h2>
                        <h3>Увеличим число потенциальных клиентов из поисковых систем <br> за счет хороших позиций вашего сайта в Яндекс и Google</h3>
                        <div class="sheet"> <img src="/assets/images/serv-sheet.png" alt="" data-aos="fade-left">
                            <p>Только целевой трафик!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-target-customers custom clearfix">
            <div class="bg_services_inner_seo" style="background-image:url('/img/bg_services_inner_seo.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="block-target-title col-md-12">
                        <div class="block-target-img"> <img src="/img/serv-sheet2.png" alt=""> </div>
                        <h2>Какие преимущества дает работа с нами?</h2> </div>
                </div>
                <div class="block-target-items seo">
                    <div class="row">
                        <div class="item col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1.2s" data-wow-offset="300">
                            <div class="item-img" style="background-image:url(/assets/images/nasviazi1.svg)"> </div>
                            <div class="item-info"> Всегда на связи </div>
                        </div>
                        <div class="item col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s" data-wow-offset="300">
                            <div class="item-img" style="background-image:url(/assets/images/dogovor1.svg)"> </div>
                            <div class="item-info"> Сроки и объем работ указаны
                                <br> в договоре </div>
                        </div>
                        <div class="item col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s" data-wow-offset="300">
                            <div class="item-img" style="background-image:url(/assets/images/dorabotaem1.svg)"> </div>
                            <div class="item-info"> Доработаем и улучшим
                                <br> ваш сайт в процессе </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 200px;">
                        <div class="col-md-12 text-center">
                            <div class="button-dlock mt-4"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="performance-indicators">
                    <h2>Показатели нашей работы</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>200+</span>
                            <p>Успешно продвинутых
                                <br> сайтов</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>45+</span>
                            <p>Постоянных
                                <br>клиентов</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>50000+</span>
                            <p>Запросов в топе</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>3 дня</span>
                            <p>Требуется на запуск
                                <br>рекламной кампании</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>2 млн.+</span>
                            <p>Клиентов мы привели
                                <br>на сайты</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>8 лет</span>
                            <p>Мы помогаем
                                <br>бизнесу развиваться</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-sentence services_content clearfix">
                <div class="bg_services_inner_seo_2 clearfix" style="background-image:url('/img/bg_services_inner_seo_2.png')"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="wow fadeInUp">Что мы предлагаем?</h2>
                            <h3 class="wow fadeInUp" data-wow-delay=".3s">SEO-продвижение обеспечит ваш сайт наилучшим потенциалом</h3> </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="advantage-advertising">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider_advertising_seo navs">
                                    <div class="slider_advertising_item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="background_advertising_item" style="background-image:url(/assets/images/slide1-seo.svg)"></div>
                                            </div>
                                            <div class="col-md-4 background_advertising_content">
                                                <div class="list">
                                                    <h2 class="h2">Точное попадание <br> в целевую аудиторию</h2>
                                                    <p>Вывод вашего сайта в на верхние строчки поисковых систем Яндекс и Google по конкурентным, продвигающим товар, запросам. Работы на опережение конкурентов. Поддержка и улучшение позиций.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider_advertising_item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="background_advertising_item" style="background-image:url(/assets/images/slide2-seo.svg)"></div>
                                            </div>
                                            <div class="col-md-4 background_advertising_content">
                                                <div class="list">
                                                    <h2 class="h2">Вывод сайта в ТОП поисковых систем Яндекс и Google</h2>
                                                    <p>Вывод вашего сайта на верхние строчки поисковых систем Яндекс и Google по конкурентным, продающим товар запросам. Работы на опережение конкурентов. Поддержка и улучшение позиций.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider_advertising_item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="background_advertising_item" style="background-image:url(/assets/images/slide3-seo.svg)"></div>
                                            </div>
                                            <div class="col-md-4 background_advertising_content">
                                                <div class="list">
                                                    <h2 class="h2">Мы сделаем вас лидером!</h2>
                                                    <p>Вы непременно станете лидером в поисковых системах, так как мы всегда работаем только на максимальный результат.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider_advertising_item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="background_advertising_item" style="background-image:url(/assets/images/slide4-seo.svg)"></div>
                                            </div>
                                            <div class="col-md-4 background_advertising_content">
                                                <div class="list">
                                                    <h2 class="h2">Собственные разработки позволяют добиться лучшего результата</h2>
                                                    <p>Мы имеем собственные разработки по продвижению сайтов, которые позволяют быстро добиться желаемого результата, при этом ценовая политика выгодно отличается от конкурентов, что могут подтвердить наши клиенты</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider_advertising_item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="background_advertising_item" style="background-image:url(/assets/images/slide5-seo.svg)"></div>
                                            </div>
                                            <div class="col-md-4 background_advertising_content">
                                                <div class="list">
                                                    <h2 class="h2">Только белые методы</h2>
                                                    <p>Мы используем только белые методы продвижения сайтов ,все наши услуги имеют гарантии.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-controls navs">
                                    <button type="button" class="slick-next_develop link"><span class="arrow"><span></span><span></span></span>
                                    </button>
                                    <div class="slide-m-dots_develop"></div>
                                    <button type="button" class="slick-prev_develop link"><span class="arrow"><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <div class="button-dlock"> <a href="#сalculate-cost" data-toggle="modal" class="btn-circle white btn-red">Рассчитать стоимость<span></span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-seo-contractor clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Почему вам стоит выбрать нас <br> в качестве вашего SEO-подрядчика?</h2> </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_1.png')"></div>
                            <p>Продвигаем сайты
                                <br> более 8 лет</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_2.png')"></div>
                            <p>Наша работа всегда выполняется качественно</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_3.png')"></div>
                            <p>Используем только новейшие и проверенные технологии</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_4.png')"></div>
                            <p>Беремся за проекты
                                <br>любой сложности и добиваемся поставленного результата</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_5.png')"></div>
                            <p>Соблюдаем сроки</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_6.png')"></div>
                            <p>К каждому клиенту
                                <br> находим особый подход</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_line_top" style="background-image: url('/img/linnear_bg_serv.png')"></div>
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
                        <li><a href="" data-page="portfolio" id="nav" data-other="1" data-name="all">Все</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="1С Битрикс">1С Битрикс</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="smm">smm</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="контекстная реклама">контекстная реклама</a></li>
                        <li class="active"><a href="" data-page="portfolio" id="nav" data-other="1" data-name="продвижение сайтов">продвижение сайтов</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="разработка сайтов">разработка сайтов</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="создание контента">создание контента</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="сопровождение сайтов">сопровождение сайтов</a></li>
                        <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="фирменный стиль">фирменный стиль</a></li>
                    </ul>
                </div>
                <div class="block_content">
                    <div class="row" id="portfolio">
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
                            <a href="https://shindodomestic.ru/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/shindo-background.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>Shindo</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали корпоративный сайт бренда кухонной техники Shindo</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> <span>smm</span> <span>фирменный стиль</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="https://sloping.krona.ru/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/krona-background-min.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>Krona</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали интернет магазин по продаже наклонных вытяжек Krona</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> <span>1С Битрикс</span> <span>контекстная реклама</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="https://fornelli-shop.ru/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/fornelli-background.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>Fornelli</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Разработали интернет магазин по продаже техники Fornelli &ndash; самого продаваемого бренда техники 45 см.</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> <span>контекстная реклама</span> <span>фирменный стиль</span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="https://123bt.ru/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                <div class="block_item"> <img src="/assets/images/123bt-background.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_inner_wrapper">
                                        <div class="block_inner_text">
                                            <div class="top">
                                                <h2>123bt</h2> </div>
                                            <div class="absolute">
                                                <p class="transparent">
                                                    <p>Доработка и сопровождение сайта, развитие.</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block_tags"> <span>сопровождение сайтов</span> <span>продвижение сайтов</span> <span>контекстная реклама</span> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-content-2">
                    <div class="row">
                        <div class="bg_services_inner_seo_3" style="background-image:url('/img/bg_services_inner_seo_3.png')"></div>
                        <div class="col-md-6 offset-md-2">
                            <p>Мы заинтересованы в успехе наших клиентов и работаем над тем, чтобы их сайты продавали продукцию или услуги, приносили прибыль, а не просто красовались в просторах сети интернет</p>
                            <h3>Работаем только на результат!</h3> </div>
                    </div>
                </div>
            </div>
        </div>
       @include('sections.form')
    </section>
</div>
@endsection