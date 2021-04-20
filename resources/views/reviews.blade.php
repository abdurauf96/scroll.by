@extends('layouts.app')

@section('content')
<div class="blog_wrapper">
    @include('sections.header')

    <section class="reviews section_agancy">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
                            <h2 class="top_ttle">Агентство</h2> <span class="sub_mnu">
                                        Отзывы                                </span> </div>
                    </div>
                </div>
            </div>
            <div class="agancy_nav_mnu">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="agency" class="link">Об агентстве</a></li>
                            <li class="active"><a href="reviews" class="link">Отзывы</a></li>
                            <li><a href="jobs" class="link">Вакансии</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews_wrap" id="items_reviews">
            <div class="reviews_items wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev" style="background-image:url(/assets/images/flavia_logo.png)"></div>
                        <div class="made_rev"> <img data-src="/" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev"> <strong>Flavia Limited</strong>
                            <br>
                            <br> За период работы с ООО «Скролл Медиа Солюшнс» сотрудники предприятия зарекомендовали себя с положительной стороны. Их работа отвечает заданному уровню, выполняется качественно и строго в установленные сроки. Хочется отметить эффективную работу специалистов и оперативность выполнения заданий, внимательное отношение к Заказчику. </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-sm-12 col-md-9">
                                <div class="person_info_rev">
                                    <p></p> <span></span> </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="downloan_file rounded-circle">
                                    <a href="/assets/images/3_001-min.jpg" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews_items wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev" style="background-image:url(/assets/images/logo-krona.png)"></div>
                        <div class="made_rev"> <img data-src="/" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev"> <strong>Бренд бытовой техники Krona</strong>
                            <br>
                            <br> Настоящим письмом коллектив бренда бытовой техники Krona сообщает, что за время сотрудничества с ООО «Скролл Медиа Солюшнс», компания успела зарекомендовать себя как надежный и профессиональный партнер с сфере разработки интернет-магазинов, SEO-продвижении, а также продвижении компании в социальных сетях. Главной отличительной чертой работы ООО «Скролл Медиа Солюшнс» является высокая организованность и оперативность сотрудников организации, готовность быстро реагировать на изменение обстоятельств. Исходя из вышесказанного, хотели бы отметить высокий потенциал ООО «Скролл Медиа Солюшнс», нацеленность на процветание и дальнейшее успешное развитие. </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-sm-12 col-md-9">
                                <div class="person_info_rev">
                                    <p></p> <span></span> </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="downloan_file rounded-circle">
                                    <a href="/assets/images/4_001-min.jpg" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews_items wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev" style="background-image:url(/assets/images/header_logo123.png)"></div>
                        <div class="made_rev"> <img data-src="/" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev"> <strong>ООО «Сигма трейд» и интернет магазин 123bt.ru</strong>
                            <br>
                            <br> ООО «Сигма трейд» и интернет магазин 123bt.ru выражают благодарность компании ООО «Скролл Медиа Солюшнс» за успешное продолжительное сотрудничество в сфере веб-разработки и интернет-маркетинга. Сотрудничество с компанией ООО «Скролл Медиа Солюшнс» продолжается с 2014 г. и продолжается по сей день. На протяжении всего периода работы компания зарекомендовала себя, как надежный деловой партнер и устойчивое предприятие. Благодаря главному принципу работы фирмы – формированию с клиентами партнерских отношений, основанных на профессионализме и взаимном сотрудничестве, она, на наш взгляд, занимает стабильное положение в области разработки сайтов, их продвижении, а также SMM и контекстной рекламе. Благодарим за достижение отличных результатов нашей компанией. </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-sm-12 col-md-9">
                                <div class="person_info_rev">
                                    <p></p> <span></span> </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="downloan_file rounded-circle">
                                    <a href="/assets/images/2_001-min.jpg" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews_items wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev" style="background-image:url(/assets/images/fornelli-logo.png)"></div>
                        <div class="made_rev"> <img data-src="/" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev"> <strong>FORNELLI  ELETTRODOMESTICI S.R.L</strong>
                            <br>
                            <br> Бренд Fornelli выражает благодарность коллективу компании ООО «Скролл Медиа Солюшнс». Агентство является нашим партнером в сфере разработки сайтов бренда, а также их продвижении в сети интернет. За время сотрудничества компания подтвердила свой высочайший профессиональный статус, активность и компетентность в выполнении поставленных задач. Все задачи выполняются вовремя, в строго обозначенные сроки и с отличным качеством. Сотрудники компании качественно справляются со своими обязанностями. Мы довольны работами Скролл Медиа Солюшнс и готовы рекомендовать эту компанию, как ответственного и надежного партнера. </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-sm-12 col-md-9">
                                <div class="person_info_rev">
                                    <p></p> <span></span> </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="downloan_file rounded-circle">
                                    <a href="/assets/images/1_001-min.jpg" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews_items wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev" style="background-image:url(/assets/images/partners.png)"></div>
                        <div class="made_rev"> <img data-src="/" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev"> <strong>SHINDODOMESTIC   CORP  LIMITED </strong>
                            <br>
                            <br> Бренд Shindo настоящим рекомендательным письмом выражает благодарность ООО «Скролл Медиа Солюшнс», которая выполнила успешную разработку корпоративного сайта в 2018 году. Хочется отметить, что специалисты компании «Скролл Медиа Солюшнс» показали готовность компетентно решать поставленные задачи. Все работы выполнены грамотно и в соответствии с договором. Рекомендуем потенциальным заказчикам компанию ООО «Скролл Медиа Солюшнс», как надежного партнера в области разработки сайтов. </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-sm-12 col-md-9">
                                <div class="person_info_rev">
                                    <p></p> <span></span> </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="downloan_file rounded-circle">
                                    <a href="/assets/images/5_001-min.jpg" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews_items wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev" style="background-image:url(/assets/images/logo_zavod.png)"></div>
                        <div class="made_rev"> <img data-src="/" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev"> <strong>ОАО «Дорстроймонтажтрест» Завод строительных деталей и конструкций</strong>
                            <br>
                            <br> Главный инженер Барановичского завода строительных деталей и конструкций выражает огромную благодарность за оказанную услугу: качественное и оперативное размещение информации на нашем сайте. Благодарим за сотрудничество. </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-sm-12 col-md-9">
                                <div class="person_info_rev">
                                    <p>В.Л. Шаруев</p> <span>Главный инженер</span> </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="downloan_file rounded-circle">
                                    <a href="/assets/images/svetliachok-bagodarnost.jpg" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn__reviews col-md-12 mb-5">
                <button data-items_count="6" class="btn-circle btn-style-red btn_reviews">Загрузить еще<span></span></button>
            </div>
        </div>
        <div class="reviews_wrap">
            <div class="reviews_items_add">
                <div class="row">
                    <div class="col-lg-12 col-xl-3">
                        <div class="photo_rev"></div>
                    </div>
                    <div class="col-lg-12 col-xl-9 dercription_wrap">
                        <div class="description_rev">
                            <h2>Хотите, чтобы Ваш отзыв появился на сайте?</h2> </div>
                        <div class="row" style="margin-top:65px;">
                            <div class="col-md-9">
                                <div class="category_list_bottom">
                                    <button class="btn-circle btn-style-red" href="#reviews-new" data-toggle="modal">Оставить отзыв<span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="button"></div>
        @include('sections.form')
    </section>
    
</div>
@endsection