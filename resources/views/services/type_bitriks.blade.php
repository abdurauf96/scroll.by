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
                                <h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2> <span class="sub_mnu" data-aos="fade-right">Разработка сайтов</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content serv-bitrix">
                <div class="row">
                    <div class="col-md-10">
                        <h2>Разработка сайтов и интернет-магазинов на 1С Битрикс</h2> </div>
                </div>
                <div class="row">
                    <div class="col-md-5 blok-left-images"> <img src="/img/img-bitrix1.png" alt=""> </div>
                    <div class="col-md-7">
                        <div class="block-right-text">
                            <h3>1С Битрикс – это эффективная система управления контентом, веб-проектами различной сложности. </h3>
                            <br>
                            <h3>Наша команда создает сайты на 1С Битрикс «под ключ» — сюда входит дизайн и полная настройка функционала. В настоящее время 1С-Битрикс является одним из лидеров в списке наиболее популярных систем по управлению контентом. Платформа является коммерческой и имеет несколько платных редакций.</h3> </div>
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
                        <div class="block-target-img"> <img src="/img/serv-sheet2.png" alt=""> </div>
                        <h2>1С Битрикс специально разработана для создания и развития интернет-проектов, имеющих разную степень сложности. К таким проектам относятся:</h2> </div>
                </div>
                <div class="block-target-items">
                    <div class="row">
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/serv-webbitrix1.png')"></div>
                            <div class="item-info"> Корпоративные сайты </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/serv-webbitrix2.png')"></div>
                            <div class="item-info"> Интернет-магазины </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('/img/serv-webbitrix3.png')"></div>
                            <div class="item-info"> Порталы и социальные сети </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="button-block text-center"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-inner-info serv-info-bitrix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="d-flex align-items-center serv-bx-title">За что выбирают CMS  <img src="/img/bitrix-logo.png" alt="" class="ml-2"></h2> </div>
                        <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/img/bx-icon-1.png')"></div>
                            <h3>Лёгкое управление</h3>
                            <p>Интуитивно понятный веб-интерфейс административной панели, подробное руководство пользователя и клиентская поддержка.</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/img/bx-icon-2.png')"></div>
                            <h3>Высокая производительность</h3>
                            <p>Технология «композитный сайт» ускорение в 100 раз! Выдержит любые нагрузки.</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/img/bx-icon-3.png')"></div>
                            <h3>Регулярные обновления</h3>
                            <p>Автоматические обновления в фоновом режиме, благодаря которым поддерживается стабильная работа всех компонентов.</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/img/bx-icon-4.png')"></div>
                            <h3>Интеграция с 1С</h3>
                            <p>Возможность синхронизации данных между сайтом и 1С:Бухгалтерия 7 и 8 версий, 1С:Предприятие и другими системами учётами, в т.ч. в режиме реального времени.поддержка.</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/img/bx-icon-5.png')"></div>
                            <h3>Надежная защита и безопасность</h3>
                            <p>Модуль проактивной защиты реализует мощный комплекс защитных мероприятий для сайта и сторонних приложений.</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/img/bx-icon-6.png')"></div>
                            <h3>Масштабирование и развитие</h3>
                            <p>Быстрый и простой переход с меньшей редакции на большую, и возможность регулярных доработок.компонентов.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="development-stages">
            <div class="work-stages-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Создавая сайт на «1С Битрикс» в Scroll Mediaвы получите:</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle">1</div>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3>Cайт под ключ</h3>
                                        <p>Комплексная разработка сайтов на «1С-Битрикс» в Минске, а также наполнение и полная SEO-оптимизацию ресурса</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle">2</div>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3>Оптимизация</h3>
                                        <p>Мы окажем содействие в организации беспрерывной работы и оптимизации вашего сайта, делая его быстрым и удобным</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle">3</div>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3>Персональный менеджер</h3>
                                        <p>На всем этапе работы вас будет курировать личный менеджер, отвечающий перед вами за все звенья процесса разработки</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 item-serv-bx">
                            <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="circle">4</div>
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
        <div class="bitrix-info-block">
            <div class="info-block-image"> <img src="/img/img-bitrix2.png" alt=""> </div>
            <div class="info-block-content">
                <div class="info-block-content-wrap link-underline-red">
                    <h2>Редакции продукта «1С-Битрикс: Управление сайтом»</h2>
                    <p>Узнать стоимость редакций и продуктов 1С-Битрикс, а также цену продления текущих лицензий вы можете по данной <a href="">ссылке</a>, а также связавшись с нашими менеджерами любым удобным для вас способом.</p>
                </div>
                <div class="button-block"> <a href="https://www.1c-bitrix.by/products/cms/license.php" target="_blank" class="btn-circle white btn-red">Сравнить редакции<span></span></a>
                    <button type="submit" href="#get-consultation" data-toggle="modal" class="btn-circle red btn-style-transparent">Получить консультацию<span></span></button>
                </div>
            </div>
        </div>
        </div>
        <!-- <div class="bg_line_top" style="background-image: url('img/linnear_bg_serv.png')"></div> -->
        <div class="section-sentence inner_website">
            <div class="top_line_description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top_line_description wow fadeInUp">
                                <h2 class="top_ttle">Наши работы</h2> </div>
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
            <div class="block-content-2">
                <div class="row">
                    <div class="bg_services_inner_seo_3" style="background-image:url('/img/bg_services_inner_seo_3.png')"></div>
                    <div class="col-md-10 offset-md-2 col-lg-6 offset-lg-2">
                        <p>Мы заинтересованы в успехе наших клиентов и работаем над тем, чтобы их сайты продавали продукцию или услуги, приносили прибыль, а не просто красовались в просторах сети интернет. Создание сайтов под ключ &mdash; это то, что мы делаем лучше многих конкурентов. Доказательство тому &mdash; <a href="https://scroll.by/portfolio">наше портфолио</a> и <a href="https://scroll.by/reviews">благодарности</a> наших клиентов</p>
                    </div>
                </div>
            </div>
            <div class="section section-email" id="begin_project">
                <div class="top_line_description" style="margin-bottom: 110px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ml-email">
                                    <div class="wow fadeInUp">
                                    <h2 class="top_ttle">Узнать стоимость</h2>
                                </div>
                                <div class="icon-category">
                                    <a class="learn-more" target="_blank" href="assets/images/BRIEF-SYTE-SCROLL-MEDIA-SOLUTIONS.doc" download="BRIEF-SYTE-SCROLL-MEDIA-SOLUTIONS RU">
                                        <div class="circle-red">
                                          <span class="icon">
                                             <img src="/img/icon/contact-icon.png" alt="">
                                         </span>
                                     </div>
                                     <p class="button-text">Скачать бриф</p>
                                 </a>
                             </div>
                                </div>
                                <!-- <div class="work_img">
                                    <a href="#">
                                        <img src="img/icon/contact-icon.png" alt="">
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="email_main red-form">
                    <div class="email_form">
                        <form action="#" method="POST" accept-charset="utf-8" id="zayafka_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="Начнем проект" name="subject">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="group">
                                        <input type="text" name="name"  required><span class="highlight"></span><span class="bar"></span>
                                        <label>Представьтесь, пожалуйста</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="group">
                                        <input type="text" name="phone"  required><span class="highlight"></span><span class="bar"></span>
                                        <label>Номер Вашего телефона</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="group">
                                        <input type="email" name="email" required><span class="highlight"></span><span class="bar"></span>
                                        <label>Ваш e-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="group">
                                        <select name="service">
                                            @foreach ($services as $ser)
                                            <option value="{{ $ser->title }}">{{ $ser->title }}</option>
                                            @endforeach
                                        </select>
                                       
                                        <!-- <input type="text" name="service" required><span class="highlight"></span><span class="bar"></span>
                                        <label>Выберите необходимую услугу<i class="fal fa-long-arrow-right"></i></label> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="group icon">
                                        <input type="file" class="chooseFileRed" style="opacity:0;" name="file"><span class="highlight"></span><span class="bar bar_file"></span>
                                        <label>Прикрепить файл (бриф) <span class="clip"><i class="fal fa-paperclip"></i></span> </label>
                                        <div class="text-file"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="group">
                                        <input type="text" name="comment"><span class="highlight"></span><span class="bar"></span>
                                        <label>Комментарий</label>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="group_check">
                                            <input type="checkbox" class="option-input checkbox" required />
                                             <label>Согласие на обработку  персональных данных</label>
                                    </div>
                                </div>
                            </div>
            
                            <button type="submit" class="btn-circle white btn-style-transparent btn-true">Отправить заявку<span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
