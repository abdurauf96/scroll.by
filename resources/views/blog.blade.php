@extends('layouts.app')

@section('content')
<div class="blog_wrapper">
    @include('sections.header')

    <section class="section_blog">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
                            <h2 class="top_ttle">Блог</h2> </div>
                    </div>
                </div>
            </div>
            <div class="agancy_nav_mnu">
                <div class="row">
                    <div class="col-md-12">
                        <ul> </ul>
                    </div>
                </div>
            </div>
            <div class="block_nav">
                <ul>
                    <li class="active"><a href="" data-page="blog" id="nav" data-other="" data-name="all">Все</a></li>
                    <li><a href="" id="nav" data-page="blog" data-other="" data-name="акция">акция</a></li>
                    <li><a href="" id="nav" data-page="blog" data-other="" data-name="блог">блог</a></li>
                </ul>
            </div>
            <div class="row" id="news_items">
                <div class="col-sm-12 col-md-6 blog_item_wrap portfolio-item wow fadeInDown" data-wow-delay=".2s">
                    <div class="blog_item">
                        <a href="/new_blog/novogodnyaya-akciya-na-uslugi-razrabotka-i-prodvizhenie-sajtov">
                            <div class="block_photo"> <img src="/assets/images/new-year.jpg" alt="">
                                <div class="overlay"></div>
                                <div class="block_tags"> <span>24.12.20</span> <span>акция</span> </div>
                            </div>
                            <div class="news_title">
                                <h3>Новогодняя акция на услуги разработка и продвижение сайтов</h3> </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 blog_item_wrap portfolio-item wow fadeInDown" data-wow-delay=".2s">
                    <div class="blog_item">
                        <a href="/new_blog/35tehnicheskaya-podderzhka-i-razvitie-brenda">
                            <div class="block_photo"> <img src="/assets/images/technical-support.jpg" alt="">
                                <div class="overlay"></div>
                                <div class="block_tags"> <span>17.12.20</span> <span>блог</span> </div>
                            </div>
                            <div class="news_title">
                                <h3>Техническая поддержка и развитие бренда</h3> </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 blog_item_wrap portfolio-item wow fadeInDown" data-wow-delay=".2s">
                    <div class="blog_item">
                        <a href="/new_blog/34ot-chego-zavisyat-sroki-seo-prodvizheniya">
                            <div class="block_photo"> <img src="/assets/images/seo-optimization.jpg" alt="">
                                <div class="overlay"></div>
                                <div class="block_tags"> <span>14.12.20</span> <span>блог</span> </div>
                            </div>
                            <div class="news_title">
                                <h3>От чего зависят сроки SEO-продвижения</h3> </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 blog_item_wrap portfolio-item wow fadeInDown" data-wow-delay=".2s">
                    <div class="blog_item">
                        <a href="/new_blog/vidy-kontekstnoj-reklamy">
                            <div class="block_photo"> <img src="/assets/images/context-adv.png" alt="">
                                <div class="overlay"></div>
                                <div class="block_tags"> <span>10.12.20</span> <span>блог</span> </div>
                            </div>
                            <div class="news_title">
                                <h3>Виды контекстной рекламы</h3> </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 blog_item_wrap portfolio-item wow fadeInDown" data-wow-delay=".2s">
                    <div class="blog_item">
                        <a href="/new_blog/dlya-chego-i-komu-nuzhna-tehnicheskaya-podderzhka">
                            <div class="block_photo"> <img src="/assets/images/techical-support.jpg" alt="">
                                <div class="overlay"></div>
                                <div class="block_tags"> <span>09.12.20</span> <span>блог</span> </div>
                            </div>
                            <div class="news_title">
                                <h3>Для чего и кому нужна техническая поддержка?</h3> </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 blog_item_wrap portfolio-item wow fadeInDown" data-wow-delay=".2s">
                    <div class="blog_item">
                        <a href="/new_blog/pro-cms-1s-bitriks-upravlenie-sajtom">
                            <div class="block_photo"> <img src="/assets/images/bitrix.jpg" alt="">
                                <div class="overlay"></div>
                                <div class="block_tags"> <span>04.12.20</span> <span>блог</span> </div>
                            </div>
                            <div class="news_title">
                                <h3>Про CMS. «1С-Битрикс: Управление сайтом»</h3> </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 show-more">
                    <button data-items_count="6" class="btn btn_our_work btn-circle btn-style-red blog-show">Загрузить еще<span></span></button>
                </div>
            </div>
            <div id="button"></div>
        </div>
    </section>
    
</div>
@endsection