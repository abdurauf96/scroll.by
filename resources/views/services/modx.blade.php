@extends('layouts.app')

@section('content')
<div class="services_wrapper">
@include('sections.header')


    <section class="section_services_list services_inner_website">
        <div class="container container-serv-bitrix">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="top_line_description inner_title">
                                <h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2>
                                <span class="sub_mnu" data-aos="fade-right">Разработка сайтов</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services_content services_content-top">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Разработка сайтов на CMS MODx</h2>
  
                            <p>MODX (читается «мо́дэкс») — это бесплатная профессиональная система управления содержимым (CMS) и фреймворк для веб-приложений, предназначенная для обеспечения и организации совместного процесса создания, редактирования и управления контентом (то есть содержимым) сайтов.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="sheet">
                            <img src="/img/modx-stacked-color.png" alt="" data-aos="fade-up">
                            <p>Существуют и одновременно активно развиваются две версии системы MODX: Evolution и Revolution. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="block-target-customers custom">
            <div class="bg_services_inner_seo" style="background-image:url('/img/services_website_dev/bg_services_website_1.png')"></div>
            <div class="bg_services_inner_wedsite" style="background-image: url('/img/services_website_dev/bg_services_website_2.png')"></div>

            <div class="container">
                <div class="row">
                    <div class="block-target-title col-md-12">
                        <div class="block-target-img">
                            <img src="/img/serv-sheet2.png" alt="">
                        </div>
                        <h2>MODX – это невероятно масштабируемая, стабильная, быстрая и безопасная Open Source CMS. Сайт на MODX – это гибкость, удобство и надежность.</h2>
                    </div>
                </div>
                <div class="block-target-items">
                    <div class="row">

                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/landing-icon.png')"></div>
                            <div class="item-info" >
                                Лэндинги
                            </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/site-icon.png')"></div>
                            <div class="item-info" >
                                Сайты-визитки
                            </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/promo-icon.png')"></div>
                            <div class="item-info" >
                                Промо-сайты
                            </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/we-developing-img4.png')"></div>
                            <div class="item-info" >
                                Корпоративные сайты
                            </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/we-developing-img5.png')"></div>
                            <div class="item-info" >
                                Интернет-магазины
                            </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/we-developing-img6.png')"></div>
                            <div class="item-info" >
                                Сервисы и др.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="button-block text-center">
                            <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="services-inner-info serv-info-bitrix">


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="d-flex align-items-center serv-bx-title">Премущества CMS  <img src="/img/img-modx-logo.png" alt="" class="ml-2"></h2>
                        </div>
                                <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                                    <div class="item-icon" style="background-image:url('/img/icon/modx-icon1.png')"></div>
                                    <h3>Безопасность и надежность</h3>
                                    <p>MODX была спроектирована с учетом требований безопасности. В CMS есть многоуровневый контроль над созданием, доступами и публикациями контента. Сайты на MODX отличаются стабильностью в работе, устойчивостью к вредоносным ПО, а техподдержка и сообщество пользователей создает все условия для постоянного совершенствования движка.</p>
                                </div>
                                                            <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                                    <div class="item-icon" style="background-image:url('/img/icon/modx-icon2.png')"></div>
                                    <h3>Широкое поле для экспериментов</h3>
                                    <p>Эту CMS можно использовать для любых типов сайта. На платформе Modx создаются современные интернет-площадки в соответствии с тенденциями и новшествами в IT. Вы всегда сможете без проблем внедрить новые цифровые методы маркетинга для продвижения сайта, опередив своих конкурентов на несколько шагов.</p>
                                </div>
                                                            <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                                    <div class="item-icon" style="background-image:url('/img/icon/modx-icon3.png')"></div>
                                    <h3>Не ограничивает вашу свободу</h3>
                                    <p>В MODX вы не найдете внутренних ограничений при разработке сайта. Данная система управления дает удивительную систему творчества, позволяя создавать сайт в соответствии со всеми вашими пожеланиями..</p>
                                </div>
                                                            <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                                    <div class="item-icon" style="background-image:url('/img/icon/modx-icon4.png')"></div>
                                    <h3>Простота администрирования</h3>
                                    <p>В «админке» все устроено ясно и просто, поэтому особых технических знаний здесь не потребуется. Вы можете редактировать контентное содержимое при помощи текстового редактора, быстро и легко добавлять новые страницы, загружать изображения.</p>
                                </div>
                                                            <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                                    <div class="item-icon" style="background-image:url('/img/icon/modx-icon5.png')"></div>
                                    <h3>SEO-ориентированностьсайтов</h3>
                                    <p>Гибкость системы позволяет настраивать техническую оптимизацию сайта для поисковых систем. Вы получаете полный контроль над структурой URL и всеми метаданными для поисковый оптимизации. MODX – это отличная SEO CMS с оптимизированным кодом и разметкой.</p>
                                </div>
                                                            <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                                    <div class="item-icon" style="background-image:url('/img/icon/modx-icon6.png')"></div>
                                    <h3>Достаточно быстрая работа</h3>
                                    <p>От скорости загрузки сайта зависит его ранжирование в поисковых системах, поэтому важно уделять этому фактору особое внимание. Благодаря мощному механизму кэширования страниц, сайты на MODX загружаются очень быстро.</p>
                                </div>
                                                </div>
                </div>

            </div>

            <div class="serv-info_block styled-ul link-underline-red">
            	<div class="container">
            		<h2 class="h2_style mb-5">Наряду с преимуществами есть и некоторые недостатки у CMS «MODX»</h2>

                <ul>
                    <li>Ограниченное количество встроенных шаблонов. Количество бесплатных шаблонов для Joomla и WordPress доходит до двух сотен. MODX может похвастаться несколькими десятками. Но есть достаточно простое решение проблемы. Любой дизайн-макет можно отверстать и адаптировать при помощи MODX-тегов, после чего использовать на движке.</li>
                    <li>Ограниченное количество полезных материалов. Хотя имеется и русскоязычное сообщество, и переведенная на русский документация. Но с ответами на некоторые вопросы могут возникнуть затруднения.</li>
                    <li>Оригинальная терминология. Она существенно отличается от используемой в других CMS. Хотя вряд ли это серьезный недостаток. Просто для человека, привыкшего к другим системам управления содержимым, это может создать определенный дискомфорт. Немного тренировки — и вся терминология станет понятной.</li>
                    <li>Как и у любой бесплатной системы с открытым кодом, есть проблемы с уязвимостью. CMS часто взламывают, но, для опытного программиста нет сложностей поставить, например, двойную авторизацию и настроить платформу так, чтобы пользоваться ею было безопасно.</li>
                </ul>
                <div>
                    <p class="mt-5"><strong>Главный недостаток на наш взгляд — это слишком малое количество готовых модулей, решений для создания на этой платформе многофункционального интернет-магазина. Работа в админ-панели совершенно не подготовлена для полноценной работы менеджера интернет-магазина. Очень многое приходится дописывать "ручками". Мы не рекомендуем создавать на MODX интернет-магазины. Лучше для этих целей использовать более подходящие решения (<a href="/servies_webdevel_bitrix">1С-Битрикс</a>, фреймворк <a href="/servies_webdevel_laravel">Laravel</a>).</strong></p>
                </div>
            	</div>
            </div>

        </div>

        <div class="development-stages">
            <div class="work-stages-red pt-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Создавая сайт на «1С Битрикс» в Scroll Media <br>вы получите:</h2>
                        </div>
                          
                    </div>
                    <div class="row">
                        <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".<?$i;?>s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle c-blu">1</div>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3>Cайт под ключ</h3>
                                        <p>Комплексная разработка сайтов на «1С-Битрикс» в Минске, а также наполнение и полная SEO-оптимизацию ресурса</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".<?$i;?>s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle c-blu">2</div>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3>Оптимизация</h3>
                                        <p>Мы окажем содействие в организации беспрерывной работы и оптимизации вашего сайта, делая его быстрым и удобным</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".<?$i;?>s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle c-blu">3</div>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3>Персональный менеджер</h3>
                                        <p>На всем этапе работы вас будет курировать личный менеджер, отвечающий перед вами за все звенья процесса разработки</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".<?$i;?>s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle c-blu">4</div>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3>Техническая поддержка</h3>
                                        <p>Наконец, вы получаете в нашем лице надежного партнера, который будет и в дальнейшем помогать вам развивать ресурс</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <div class="section-sentence inner_website">
            <div class="top_line_description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top_line_description wow fadeInUp">
                                <h2 class="top_ttle">Наши работы</h2>
                            </div>
                            <div class="icon-category">
                                <a class="learn-more" href="/portfolio">
                                <div class="circle-red">
                                  <span class="icon">
                                   <img src="/img/icon/portfolio-icon.png" alt="">
                                 </span>
                               </div>
                               <p class="button-text">Портфолио</p>
                             </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('projects-component', ['active'=>'all'])
            <div class="block-content-2" >
                    <div class="row">
                        <div class="bg_services_inner_seo_3" style="background-image:url('/img/bg_services_inner_seo_3.png')"></div>
                        <div class="col-md-10 offset-md-2 col-lg-6 offset-lg-2">
                            <p>Мы заинтересованы в успехе наших клиентов и работаем над тем, чтобы их сайты продавали продукцию или услуги, приносили прибыль, а не просто красовались в просторах сети интернет. Создание сайтов под ключ &mdash; это то, что мы делаем лучше многих конкурентов. Доказательство тому &mdash; <a href="https://scroll.by/portfolio">наше портфолио</a> и <a href="https://scroll.by/reviews">благодарности</a> наших клиентов</p>
                        </div>
                    </div>
                </div>
               
        </div>

        

    </section>

</div>
@endsection