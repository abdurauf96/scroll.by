@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list">
        <div class="container">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="top_line_description inner_title" data-aos="fade-right">
                                <h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2> <span class="sub_mnu">Контекстная реклама</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Контекстная реклама для вашего бизнеса<br />в Яндекс и Google</h2>
                        <h3>Которая действительно работает и приносит прибыль!</h3>
                        <div class="sheet"> <img src="/assets/images/serv-sheet.png" alt="" data-aos="fade-left">
                            <p>Первые клиенты
                                <br /> в день запуска!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-target-customers" style="background-image: url('/img/linnear_bg_serv.png')">
            <div class="container">
                <div class="row">
                    <div class="block-target-title col-md-12">
                        <div class="block-target-img"> <img src="/img/serv-sheet2.png" alt=""> </div>
                        <h2>Ваш сайт приведет целевых клиентов <br >уже <span>завтра!</span></h2> </div>
                </div>
                <div class="block-target-items">
                    <div class="row">
                        <div class="item col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/assets/images/noviy.svg')"> </div>
                            <div class="item-info"> Даже если ресурс новый </div>
                        </div>
                        <div class="item col-md-4 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <div class="item-img" style="background-image: url('/assets/images/netop10.svg')"> </div>
                            <div class="item-info"> Даже если не топ 10 </div>
                        </div>
                        <div class="item col-md-4 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="item-img" style="background-image: url('/assets/images/netseo.svg')"> </div>
                            <div class="item-info"> Даже если нет SEO </div>
                        </div>
                    </div>
                </div>
                <div class="performance-indicators">
                    <h2>Показатели нашей работы</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>1300+</span>
                            <p>Рекламных кампаний
                                <br>нами запущено</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>300+</span>
                            <p>Постоянных
                                <br>клиентов</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>16,2</span>
                            <p>Средний CTR наших
                                <br>рекламных кампаний</p>
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
                <div class="how-advertising-works">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Как работает контекстная реклама</h2>
                            <h3>Контекстная реклама - это показ рекламных объявлений заинтересованному пользователю</h3>
                            <h3>Объявления в Яндекс и Google приведут к вам горячих клиентов. Сразу. Точно.</h3> </div>
                    </div>
                    <div class="advertising-works-items">
                        <div class="row">
                            <div class="item col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                                <div class="item-img" style="background-image: url('/assets/images/hot.svg')"> </div>
                                <div class="item-title"> Почему именно горячих? </div>
                                <div class="item-info">
                                    <p>Потому что ваше предложение (в виде объявления) будет показано потенциальному клиенту, который прямо сейчас спрашивает у поисковика, где можно купить то, что есть у вас. <strong>Результат — вашу рекламу увидят только нужные люди.</strong></p>
                                </div>
                            </div>
                            <div class="item col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                                <div class="item-img" style="background-image: url('/assets/images/srazu.svg')"> </div>
                                <div class="item-title"> Почему сразу? </div>
                                <div class="item-info">
                                    <p>Потому что ваше объявление может допуститься к показу сразу же после настройки рекламной кампании. Для этого нужен хороший специалист и от 2 до 4 дней. <strong>Потом запуск рекламы — и горячие клиенты обрывают вам трубки.</strong></p>
                                </div>
                            </div>
                            <div class="item col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                                <div class="item-img" style="background-image: url('/assets/images/target.svg')"> </div>
                                <div class="item-title"> Почему точно? </div>
                                <div class="item-info">
                                    <p>Потому что есть люди, которые уже решили купить тот товар, который предлагаете вы. Эти люди уже ищут в Интернете, где именно его купить. <strong>А объявление просто подсказывает им верный номер телефона.                                                Ваш номер.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video_about_work">
                <div class="container">
                    <h2>Смотрите видео о работе <br>
                                Яндекс Директ и Google Adwords</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 item-video" data-aos="fade-right">
                            <div class="logo-block"> <img src="/assets/images/google-adwords.png" alt=""> </div>
                            <div class="video-block">
                                <iframe src="//www.youtube.com/embed/Ff0J5FU-_ZU?autoplay=0&amp;loop=0&amp;showinfo=0&amp;theme=light&amp;color=red&amp;controls=1&amp;modestbranding=0&amp;start=0&amp;fs=1&amp;iv_load_policy=1&amp;wmode=transparent&amp;rel=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 item-video" data-aos="fade-right">
                            <div class="logo-block"> <img src="/assets/images/yandex-direct.png" alt=""> </div>
                            <div class="video-block">
                                <iframe src="//www.youtube.com/embed/GwFY4iljSZQ?autoplay=0&amp;loop=0&amp;showinfo=0&amp;theme=light&amp;color=red&amp;controls=1&amp;modestbranding=0&amp;start=0&amp;fs=1&amp;iv_load_policy=1&amp;wmode=transparent&amp;rel=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantage-advertising">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="h2 wow fadeInUp" data-wow-duration="1.2s">Преимущества контекстной рекламы</h2> </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider_advertising navs">
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url('/assets/images/context-slide1.svg')"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Точное попадание <br> в целевую аудиторию</h2>
                                                <p>Реклама показывается тогда, когда она
                                                    <br> соответствует теме запроса пользователя</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url('/assets/images/context-slide2.svg')"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Быстрый результат</h2>
                                                <p>Кампания начинает работать сразу после создания. Изменения могут вноситься на лету.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url('/assets/images/context-slide3.svg')"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Плата только за переход</h2>
                                                <p>Вы не платите за показ объявлений. Вы платите только за переход на сайт</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url('/assets/images/context-slide4.svg')"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Управление бюджетом</h2>
                                                <p>Бюджет рекламной кампании расходуется только на потенциальных клиентов</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url('/assets/images/context-slide5.svg')"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Поток клиентов</h2>
                                                <p>Контекстная реклама увеличивает поток клиентов на Ваш сайт, а следовательно и доход</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url('/assets/images/context-slide6.svg')"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Выбор региона</h2>
                                                <p>Привлечение аудитории на Ваш сайт в выбранном регионе</p>
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
                        <div class="col-md-12">
                            <div class="button-dlock text-center"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="development-time">
                <div class="container">
                    <div class="row">
                        <h2 class="wow fadeInUp" data-wow-duration="1.2s" style="margin-bottom: 75px;">Куда уходит время?</h2>
                        <div class="col-md-12">
                            <div class="shema"></div>
                            <!-- <section id="retail" class="steps-section clearfix">
                                  <div class="steps-timeline">
                                    <div class="steps steps-one">
                                      <div class="circles red">
                                          <span class="blink"></span>
                                      </div>
                                      <h3 class="steps-name">Начало <br> работы</h3>
                                    </div>
                                    <div class="steps steps-two">
                                      <div class="circles bt"></div>
                                      <h3 class="steps-name bt">Выявление <br> приоритетных <br> направлений</h3>
                                    </div>
                                      <div class="steps steps-two-one">
                                      <div class="circles"></div>
                                      <h3 class="steps-name">Создание <br> рекламной <br> кампании</h3>
                                     </div>
                                      <div class="steps steps-two-two">
                                      <div class="circles bt"></div>
                                      <h3 class="steps-name bt">Cоставление <br> рекламных <br> объявлений</h3>
                                    </div>
                                    <div class="steps steps-three">
                                      <div class="circles"></div>
                                      <h3 class="steps-name">Настройка <br> рекламной <br> кампании</h3>
                                    </div>
                                    <div class="steps steps-four">
                                      <div class="circles bt"></div>
                                      <h3 class="steps-name bt">Связь <br> с Яндекс метрикой<br>и Google Analytics</h3>
                                    </div>
                                    <div class="steps steps-five">
                                      <div class="circles red">
                                          <span></span>
                                      </div>
                                      <h3 class="steps-name" style="color:#e31829">Запуск<br>рекламы</h3>
                                </div>
                                
                                    <div class="steps steps-six">
                                      <div class="circles red bt">
                                      </div>
                                      <h3 class="steps-name bt">Связь<br>я Яндекс метрикой <br>и Google Analytics</h3>
                                </div>
                                <div class="steps steps-seven">
                                      <div class="circles red">
                                      </div>
                                      <h3 class="steps-name">Настройка<br>рекламной<br>кампании</h3>
                                </div>
                                <div class="steps steps-eight">
                                      <div class="circles red bt">
                                      </div>
                                      <h3 class="steps-name bt">Связь<br>я Яндекс метрикой <br>и Google Analytics</h3>
                                </div>
                                <div class="wrapper-oval">
                                    <span class="arr arr-left"><i class="fal fa-chevron-left"></i></span>
                                    <span class="arr arr-right"><i class="fal fa-chevron-right"></i></span>
                                </div>
                                </div>
                                
                                </section> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="section our_works">
                <div class="top_line_description">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="top_line_description wow fadeInUp" data-wow-duration="1.2s">
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
                            <li class="active"><a href="" data-page="portfolio" id="nav" data-other="1" data-name="контекстная реклама">контекстная реклама</a></li>
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
                            <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                                <a href="https://krona-shop.ru/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                    <div class="block_item"> <img src="/assets/images/krona_kamilla-background.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="block_inner_wrapper">
                                            <div class="block_inner_text">
                                                <div class="top">
                                                    <h2>KAMILLA</h2> </div>
                                                <div class="absolute">
                                                    <p class="transparent">
                                                        <p>Интернет магазин по продаже вытяжек Krona Kamilla</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> <span>контекстная реклама</span> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                                <a href="https://novalux.by/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                    <div class="block_item"> <img src="/assets/images/novalux-background.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="block_inner_wrapper">
                                            <div class="block_inner_text">
                                                <div class="top">
                                                    <h2>Novalux</h2> </div>
                                                <div class="absolute">
                                                    <p class="transparent">
                                                        <p>Разработали сайт-каталог производителя мебели</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> <span>контекстная реклама</span> <span>smm</span> <span>сопровождение сайтов</span> <span>фирменный стиль</span> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                                <a href="https://shop.shindodomestic.ru/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                    <div class="block_item"> <img src="/assets/images/shop-shindo-background.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="block_inner_wrapper">
                                            <div class="block_inner_text">
                                                <div class="top">
                                                    <h2>Shop.<br>Shindodomestic</h2> </div>
                                                <div class="absolute">
                                                    <p class="transparent">
                                                        <p>Разработали интернет магазин по продаже вытяжек бренда Shindo</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_tags"> <span>разработка сайтов</span> <span>продвижение сайтов</span> <span>1С Битрикс</span> <span>контекстная реклама</span> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('sections.form')
        </div>
    </section>
</div>
@endsection