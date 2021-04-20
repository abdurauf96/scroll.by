@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list services_inner_seo services_inner_social" style="background-image: url('/img/services-seo/bg-inner-linnear.png')">
        <div class="container">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="top_line_description inner_title">
                                <h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2> <span class="sub_mnu" data-aos="fade-right">Продвижение в социальных сетях</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Продвижение в социальных сетях (SMM)</h2>
                        <h3>Мы предлагаем продвижение вашего бизнеса в социальных сетях, которое реально приводит клиентов</h3> </div>
                    <div class="col-md-4">
                        <div class="sheet"> <img src="/assets/images/img_social.png" alt="" data-aos="fade-left">
                            <p>SMM приводит
                                <br /> реальных клиентов</p>
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
                        <h2>Что такое SMM (Social Media Marketing)</h2> </div>
                </div>
                <div class="block-what-is-smm seo">
                    <div class="row">
                        <div class="item col-sm-12 col-md-6" data-aos="fade-right">
                            <div class="item-img" style="background-image: url('/assets/images/what-is-smm.svg')"> </div>
                        </div>
                        <div class="item col-sm-12 col-md-6">
                            <div class="item-info text-left">
                                <h2 class="wow fadeInUp">Что такое SMM?</h2>
                                <p class="wow fadeInUp" data-wow-delay=".3s">Social Media Marketing — взаимодействие с клиентами через социальные платформы. SMM-специалисты увеличивают охват целевой аудитории и улучшают имидж компании.</p>
                                <p class="wow fadeInUp" data-wow-delay=".5s"> При этом контент и манера общения с посетителем зависит от их интересов.
                                    <br>
                                    <br> Этот вид маркетинга подразумевает работу с подписчиками на корпоративных аккаунтах, расширение базы фолловеров и т. д. SMM-продвижение в социальных сетях подразумевает генерацию интересных и полезных материалов, которые пользователи будут распространять самостоятельно, повышая осведомленность о бренде, его имидже и количество читателей аккаунта. </p>
                            </div>
                            <div class="button-dlock text-left wow fadeInUp" data-wow-delay=".7s"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="block-target-customers custom">
                    <!-- <div class="bg_line_top" style="background-image: url('img/linnear_bg_serv.png')"></div> -->
                    <div class="container">
                        <div class="row">
                            <div class="block-target-title col-md-12">
                                <h2>Как мы работаем</h2> </div>
                        </div>
                        <div class="block-target-items">
                            <div class="row">
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/box1.svg')">
                                        <div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
                                    </div>
                                    <div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".3s">1</span>
                                        <p>Выбираем
                                            <br> социальную платформу</p>
                                    </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/box2.svg')">
                                        <div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
                                    </div>
                                    <div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".5s">2</span>
                                        <p>Определяемся
                                            <br> с типами контента</p>
                                    </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/box3.svg')">
                                        <div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
                                    </div>
                                    <div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".7s">3</span>
                                        <p>Привлекаем
                                            <br> целевую адиторию</p>
                                    </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/box4.svg')">
                                        <div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
                                    </div>
                                    <div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".3s">4</span>
                                        <p>Публикуем контент
                                            <br> и общаемся с подписчиками</p>
                                    </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/box5.svg')">
                                        <div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
                                    </div>
                                    <div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".5s">5</span>
                                        <p>Оцениваем
                                            <br> статистику</p>
                                    </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/box6.svg')">
                                        <div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
                                    </div>
                                    <div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".7s">6</span>
                                        <p>При необходимости
                                            <br> корректируем стратегию
                                            <br> и продолжаем работать</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-seo-contractor">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Все, что вам нужно знать о преимуществах
                                    продвижения в социальных сетях</h2> </div>
                        <div class="col-6 col-sm-6 col-md-5 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_1.png')"></div>
                            <p>Доступные
                                <br> цены</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_2.png')"></div>
                            <p>Целевая
                                <br> аудитория</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_3.png')"></div>
                            <p>Возможность
                                <br> общения с клиентом
                                <br> напрямую</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-5 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_4.png')"></div>
                            <p>Интеграция
                                <br> с сайтом</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_5.png')"></div>
                            <p>Прозрачность
                                <br> работы</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_6.png')"></div>
                            <p>Перспективное
                                <br> направление</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-5 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_7.png')"></div>
                            <p>Альтернатива
                                <br> web-сайтам</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_8.png')"></div>
                            <p>Эффект
                                <br> сарафанного радио</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon_social_9.png')"></div>
                            <p>Удобство донесения
                                <br> информации</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reasons_work advantage-advertising">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>8 причин работать именно с нами</h2> </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider_reasons_work slider_advertising navs" data-aos="fade-up">
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide1.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Мы действительно работаем7 дней в неделю, 365 дней в году</h2>
                                                <p>Даже 31 декабря, когда все заняты приготовлением оливье, и 1 января, когда все наслаждаются оздоровительным сном. И 7 января и 9 мая и во все остальные праздники, когда ваши клиенты сидят в социальных сетях, а наши конкуренты отдыхают.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide2.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Мы полностью закрываем Вашу потребность в продвижении вСоциальных сетях</h2>
                                                <p>Вам не нужно искать кого-то еще, что бы удовлетворить свою потребность в результате. Мы работаем во всех популярных социальных сетях и предоставляем все возможные услуги от модерации до аудита и консалтинга.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide3.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Мы доступны для своих клиентов 24 часа в сутки, 7 дней внеделю</h2>
                                                <p>Если у Вас возникает вопрос Вам не нужно ждать утра или начала рабочей недели, Вы можете звонить когда Вам удобно.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide4.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Мы очень гибкие в плане цены</h2>
                                                <p>У нас есть базовые пакеты и базовый набор работ, однако если Вам нужны определенные услуги мы всегда пойдем на встречу и пересчитаем стоимость услуг исходя из Ваших потребностей.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide5.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Честность</h2>
                                                <p>Мы всегда честны с клиентом, мы не «дорисовываем» отчеты, если что-то пошло не так, мы сразу поставим Вас в известность и предложим варианты решения.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide6.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Мы предоставляем очень качественные услуги</h2>
                                                <p>по продвижению в социальных сетях. Это подтверждается нашими клиентами.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide7.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Мы фанаты своего дела</h2>
                                                <p>У нас есть большой опыт, но мы всегда продолжаем учиться и получать новые знания, которые потом реализуем в Ваших проектах. Наше качество растет каждый день соответственно растет и качество предоставляемых услуг, а цены остаются низменными.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider_advertising_item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="background_advertising_item" style="background-image:url(/assets/images/smm-slide8.svg)"></div>
                                        </div>
                                        <div class="col-md-4 background_advertising_content">
                                            <div class="list">
                                                <h2 class="h2">Мы всегда выдерживаем сроки</h2>
                                                <p>Если мы с Вами договорились что работы будут выполнены к понедельнику, значит они будут выполнены к понедельнику - по другому никак.</p>
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
                            <div class="button-block text-center"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Запросить план продвижения<span></span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-stages">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Этапы работ и сотрудничество с нами</h2> </div>
                    </div>
                    <div class="work-stages-wrapper">
                        <div class="work-stages-block" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6 work-stages-item">
                                    <div class="work-stages-item-left">
                                        <div class="row">
                                            <div class="col-sm-2 col-md-2">
                                                <div class="circle ">1</div>
                                            </div>
                                            <div class="col-sm-5 col-md-5">
                                                <h3>Ваша заявка</h3> </div>
                                            <div class="col-sm-5 col-md-5">
                                                <hr> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 work-stages-item-two ">
                                    <h4>Подайте заявку или позвоните нам, чтобы начать сотрудничество</h4>
                                    <div class="button-block"> <a href="#request" data-toggle="modal" class="btn-circle white btn-red">Подать заявку<span></span></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="work-stages-block" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6 work-stages-item">
                                    <div class="work-stages-item-left">
                                        <div class="row">
                                            <div class="col-sm-2 col-md-2">
                                                <div class="circle ">2</div>
                                            </div>
                                            <div class="col-sm-5 col-md-5">
                                                <h3>Знакомство</h3> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="work-stages-block" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6 work-stages-item">
                                    <div class="work-stages-item-left">
                                        <div class="row">
                                            <div class="col-sm-2 col-md-2">
                                                <div class="circle ">3</div>
                                            </div>
                                            <div class="col-sm-5 col-md-5">
                                                <h3>Составление стратегии</h3> </div>
                                            <div class="col-sm-5 col-md-5">
                                                <hr> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 work-stages-item-two ">
                                    <h4>На этом этапе мы создаем план по развитию вашего бизнеса</h4> </div>
                            </div>
                        </div>
                        <div class="work-stages-block" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6 work-stages-item">
                                    <div class="work-stages-item-left">
                                        <div class="row">
                                            <div class="col-sm-2 col-md-2">
                                                <div class="circle ">4</div>
                                            </div>
                                            <div class="col-sm-5 col-md-5">
                                                <h3>Запуск</h3> </div>
                                            <div class="col-sm-5 col-md-5">
                                                <hr> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 work-stages-item-two ">
                                    <h4>Финальный этап, на котором производится запуск готовой кампании</h4> </div>
                            </div>
                        </div>
                        <div class="work-stages-block" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6 work-stages-item">
                                    <div class="work-stages-item-left">
                                        <div class="row">
                                            <div class="col-sm-2 col-md-2">
                                                <div class="circle ">5</div>
                                            </div>
                                            <div class="col-sm-5 col-md-5">
                                                <h3>Vkontakte                                                     Facebook <br>                                                     Instagram <br>                                                     Odnoklassniki</h3> </div>
                                            <div class="col-sm-5 col-md-5">
                                                <hr> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 work-stages-item-two ">
                                    <h4>На этом этапе мы создаем план по развитию вашего бизнеса</h4> </div>
                            </div>
                        </div>
                        <div class="work-stages-block" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6 work-stages-item">
                                    <div class="work-stages-item-left">
                                        <div class="row">
                                            <div class="col-sm-2 col-md-2">
                                                <div class="circle red">6</div>
                                            </div>
                                            <div class="col-sm-5 col-md-5">
                                                <h3>Запуск</h3> </div>
                                            <div class="col-sm-5 col-md-5">
                                                <hr> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 work-stages-item-two red">
                                    <h4>Финальный этап, на котором вы получаете результат</h4> </div>
                            </div>
                        </div>
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
                            <li><a href="" data-page="portfolio" id="nav" data-other="1" data-name="all">Все</a></li>
                            <li><a href="" id="nav" data-page="portfolio" data-other="1" data-name="1С Битрикс">1С Битрикс</a></li>
                            <li class="active"><a href="" data-page="portfolio" id="nav" data-other="1" data-name="smm">smm</a></li>
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
                                <a href="https://www.instagram.com/olga_salon_grodno" target="_blank" rel="nofollow" class="portfolio-item-link">
                                    <div class="block_item"> <img src="/assets/images/olga2.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="block_inner_wrapper">
                                            <div class="block_inner_text">
                                                <div class="top">
                                                    <h2>Салон красоты «Ольга»</h2> </div>
                                                <div class="absolute">
                                                    <p class="transparent">
                                                        <p>instagram&nbsp;@ olga_salon_grodno</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_tags"> <span>smm</span> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                                <a href="https://www.instagram.com/veronikas2233/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                    <div class="block_item"> <img src="/assets/images/veronika.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="block_inner_wrapper">
                                            <div class="block_inner_text">
                                                <div class="top">
                                                    <h2>Салон красоты «ВерОника»</h2> </div>
                                                <div class="absolute">
                                                    <p class="transparent">
                                                        <p>instagram&nbsp;@veronikas2233</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_tags"> <span>smm</span> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 portfolio-item wow fadeInDown" data-wow-delay=".3s">
                                <a href="https://www.instagram.com/red_stil_baranovichi/" target="_blank" rel="nofollow" class="portfolio-item-link">
                                    <div class="block_item"> <img src="/assets/images/redstile.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="block_inner_wrapper">
                                            <div class="block_inner_text">
                                                <div class="top">
                                                    <h2>Салон красоты «Red style»</h2> </div>
                                                <div class="absolute">
                                                    <p class="transparent">
                                                        <p>instagram&nbsp;&nbsp;red_stil_baranovichi</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block_tags"> <span>smm</span> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block-content-2">
                        <div class="row">
                            <div class="bg_services_inner_seo_3" style="background-image:url('/img/bg_services_inner_seo_3.png')"></div>
                            <div class="col-sm-10 col-md-6 offset-md-2">
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