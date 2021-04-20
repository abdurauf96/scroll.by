@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list services_inner_seo services_inner_technical_support" style="background-image: url('img/services-seo/bg-inner-linnear.png')">
        <div class="container">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="top_line_description inner_title">
                                <h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2> <span class="sub_mnu" data-aos="fade-right">Техническая поддержка</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Техническая поддержка сайта</h2>
                        <h3>Мы осуществляем поддержку сайтов &mdash; от корпоративного до крупного интернет-магазина. Мы будем решать все возникающие технические и контентные вопросы.</h3> </div>
                    <div class="col-md-4">
                        <div class="sheet"> <img src="/assets/images/img-technical-support.png" alt="" data-aos="fade-left">
                            <p>Нам не важна география, мы сможем помочь Вам, где бы вы не находились!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-target-customers custom">
            <div class="bg" style="background-image: url('/img/services-design/bg_services_inner_design.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="block-target-title col-md-12">
                        <div class="block-target-img"> <img src="img/serv-sheet2.png" alt=""> </div>
                        <h2>Что? Зачем? Для чего?</h2> </div>
                </div>
                <div class="block-what-is-smm seo">
                    <div class="row">
                        <div class="item col-sm-12 col-md-6" data-aos="fade-right">
                            <div class="item-img" style="background-image: url('/assets/images/tp.svg')"> </div>
                        </div>
                        <div class="item col-sm-12 col-md-6">
                            <div class="item-info text-left">
                                <h2 class="wow fadeInUp">Что такое техническая поддержка
                                            и для чего она нужна</h2>
                                <p class="wow fadeInUp" data-wow-delay=".3s">После того, как сайт был создан, необходимо позаботиться о его дальнейшей работе – технической поддержке сайта.</p>
                                <br>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Именно поэтому поддержка сайта – это не только его обновление, но также внедрение изменений в графике, создание новых разделов, блоков, формирование устойчивого интереса пользователей к ресурсу. Техническая поддержка сайтов – это комплекс услуг, за которым стоит решение различных задач и проведение различных мероприятий. </p>
                                <br>
                                <p class="wow fadeInUp" data-wow-delay=".7s">От этого и будет рассчитываться объем проводимых работ: постоянная поддержка сайта – абонентская плата, или периодическая техническая поддержка сайтов – рассчет осуществляется по часам, потраченным на поддержку сайта.</p>
                            </div>
                            <div class="button-dlock text-left wow fadeInUp" data-wow-delay=".9s"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="block-target-customers custom">
                    <!-- <div class="bg_line_top" style="background-image: url('img/linnear_bg_serv.png')"></div> -->
                    <div class="container">
                        <div class="row">
                            <div class="block-target-title col-md-12">
                                <h2>Плюсы работы с нами</h2> </div>
                        </div>
                        <div class="block-target-items">
                            <div class="row">
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/plusy-box1.svg')"> </div>
                                    <div class="item-info"> Мы не болеем, не уходим в отпуск, не опаздываем на работу </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/plusy-box2.svg')"> </div>
                                    <div class="item-info"> Договорные отношения с четко прописанными обязанностями и ответственностью сторон </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/plusy-box3.svg')"> </div>
                                    <div class="item-info"> Низкая стоимость обслуживания сайта по сравнению со всеми другими способами </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/plusy-box4.svg')"> </div>
                                    <div class="item-info"> Мы обладаем всеми необходимыми ресурсами, чтобы решить любые задачи </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/plusy-box5.svg')"> </div>
                                    <div class="item-info"> Мы обеспечиваем комплексное обслуживание сайта </div>
                                </div>
                                <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                                    <div class="item-img" style="background-image: url('/assets/images/plusy-box6.svg')"> </div>
                                    <div class="item-info"> Нам не важна география, мы сможем помочь вам, где бы Вы не находились </div>
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
                            <h2>Порядок оказания услуг <br>
                                        по технической поддержке сайтов</h2> </div>
                        <div class="col-6 col-sm-6 col-md-5 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon-techsupport-1.png')"></div>
                            <p>Узнаем о ваших
                                <br> замечаниях к проекту
                                <br> и планах по его развитию</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon-techsupport-2.png')"></div>
                            <p>Анализ
                                <br> конкурентов</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon-techsupport-3.png')"></div>
                            <p>Регулярное обновление
                                <br> информации на сайте</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-5 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon-techsupport-4.png')"></div>
                            <p>Постоянный контроль
                                <br> целостности ресурса</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon-techsupport-5.png')"></div>
                            <p>Добавление новых
                                <br> модулей при
                                <br> необходимости</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 item" data-aos="zoom-in">
                            <div class="item-icon" style="background-image:url('/assets/images/icon-techsupport-6.png')"></div>
                            <p>Бэкап
                                <br> и восстановление
                                <br> из бэкапа</p>
                        </div>
                    </div>
                </div>
            </div>
            @include('sections.form')
    </section>
</div>
@endsection