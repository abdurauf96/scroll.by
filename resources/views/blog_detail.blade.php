@extends('layouts.app')

@section('content')
<div class="blog_wrapper">
    @include('sections.header')

    <section class="section_blog blog-single">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="400">
                            <h2 class="top_ttle">Блог</h2> <span class="sub_mnu">акция</span> </div>
                        <div class="icon-category icon-long">
                            <a class="learn-more" href="/blog">
                                <div class="circle-red"> <span class="icon">
                                   <img src="/img/icon/blog-icon.png" alt="">
                                 </span> </div>
                                <p class="button-text">Все статьи Блога</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-single-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="date-publication"> 24.12.2020 </div>
                    </div>
                    <div class="col-md-12">
                        <div class="blog-single-photo"> <img src="/assets/images/new-year.jpg" alt=""> </div>
                        <div class="blog-single-descr">
                            <div class="col-md-12 col-lg-8 offset-lg-2">
                                <h1>Новогодняя акция</h1>
                                <h3><strong>На услуги разработка и продвижение сайтов</strong></h3>
                                <p>&nbsp;</p>
                                <h3>Поздравляем всех настоящих и будущих клиентов, а также друзей, коллег&nbsp;и просто хороших людей с наступающим Рождеством и Новым Годом!</h3>
                                <h3>По случаю наступления 2021 года с 22 декабря по 31 декабря объявляем скидки от 20 до 30% на наши услуги! Не упустите возможность воспользоваться этим предложением!&nbsp;</h3>
                                <p>&nbsp;</p>
                                <p>Выбирайте любую услугу нашего агентства и получите скидку 20% при заключении договора до конца года.
                                    <br /> Особая скидка на SEO-продвижение вашего сайта. Продвижение сайта в поисковых системах Яндекс и Google -30%</p>
                                <p><strong>Чтобы получить новогоднюю скидку оставьте заявку на сайте&nbsp;scroll.by, напишите на почту&nbsp;info@scroll.by&nbsp;или позвоните по номеру +375(44)588-77-11</strong></p>
                                <div class="info-share">
                                    <p>Поделиться</p>
                                    <ul class="link">
                                        <li>
                                            <a href="https://vk.com/" target="_blank" class="fab fa-vk"></a>
                                        </li>
                                        <li>
                                            <a href="https://facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/" target="_blank" class="fab fa-odnoklassniki"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_line_description" style="margin-bottom: 110px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <h2 class="top_ttle">Читайте также</h2> </div>
                    <div class="icon-category bottom icon-long">
                        <a class="learn-more" href="/blog">
                            <div class="circle-red"> <span class="icon">
                                    <img src="/img/icon/blog-icon.png" alt="">
                                 </span> </div>
                            <p class="button-text">Все статьи Блога</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="read-also">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="blog_item aos-init aos-animate" data-aos="fade-right">
                            <a href="/new_blog/novogodnyaya-akciya-na-uslugi-razrabotka-i-prodvizhenie-sajtov">
                                <div data-href="/new_blog/novogodnyaya-akciya-na-uslugi-razrabotka-i-prodvizhenie-sajtov"></div>
                                <div class="block_photo"> <img data-src="/assets/images/new-year.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_tags"> <span>24.12.20</span> <span>акция</span> </div>
                                </div>
                                <div class="news_title">
                                    <h3> Новогодняя акция на услуги разработка и продвижение сайтов</h3> </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="blog_item aos-init aos-animate" data-aos="fade-right">
                            <a href="/new_blog/35tehnicheskaya-podderzhka-i-razvitie-brenda">
                                <div data-href="/new_blog/35tehnicheskaya-podderzhka-i-razvitie-brenda"></div>
                                <div class="block_photo"> <img data-src="/assets/images/technical-support.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_tags"> <span>17.12.20</span> <span>блог</span> </div>
                                </div>
                                <div class="news_title">
                                    <h3> Техническая поддержка и развитие бренда</h3> </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="blog_item aos-init aos-animate" data-aos="fade-right">
                            <a href="/new_blog/34ot-chego-zavisyat-sroki-seo-prodvizheniya">
                                <div data-href="/new_blog/34ot-chego-zavisyat-sroki-seo-prodvizheniya"></div>
                                <div class="block_photo"> <img data-src="/assets/images/seo-optimization.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_tags"> <span>14.12.20</span> <span>блог</span> </div>
                                </div>
                                <div class="news_title">
                                    <h3> От чего зависят сроки SEO-продвижения</h3> </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="blog_item aos-init aos-animate" data-aos="fade-right">
                            <a href="/new_blog/vidy-kontekstnoj-reklamy">
                                <div data-href="/new_blog/vidy-kontekstnoj-reklamy"></div>
                                <div class="block_photo"> <img data-src="/assets/images/context-adv.png" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_tags"> <span>10.12.20</span> <span>блог</span> </div>
                                </div>
                                <div class="news_title">
                                    <h3> Виды контекстной рекламы</h3> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection