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
                            <h2 class="top_ttle">Блог</h2> <span class="sub_mnu">{{ $blog->category=='deal'? 'акция' : 'блог' }}</span> </div>
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
                        <div class="date-publication"> {{ $blog->created_at->format('d.m.y') }}</div>
                    </div>
                    <div class="col-md-12">
                        <div class="blog-single-photo"> <img src="{{ Voyager::image($blog->image) }}" alt="{{ $blog->image_alt }}" title="{{ $blog->image_title }}"> </div>
                        <div class="blog-single-descr">
                            <div class="col-md-12 col-lg-8 offset-lg-2">
                                {!! $blog->body !!}
                                <div class="info-share">
                                    <p>Поделиться</p>
                                    <ul class="link">
                                        <li>
                                            <a href="https://vk.com/" target="_blank" class="fab fa-vk"></a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ \Request::url() }}" target="_blank" class="fab fa-facebook-f"></a>
                                        </li>
                                        <li>
                                            <a href="https://telegram.me/share/url?url={{ \Request::url() }}" target="_blank" class="fab fa-telegram-plane">  </a>
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
                    @foreach ($blogs as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="blog_item aos-init aos-animate" data-aos="fade-right">
                            <a href="{{ route('blogDetail', $item->slug) }}">
                                <div data-href="{{ route('blogDetail', $item->slug) }}"></div>
                                <div class="block_photo"> <img data-src="{{ Voyager::image($item->image) }}" alt="">
                                    <div class="overlay"></div>
                                    <div class="block_tags"> <span>{{ $item->created_at->format('d.m.y') }}</span> <span>{{ $blog->category=='deal'? 'акция' : 'блог' }}</span> </div>
                                </div>
                                <div class="news_title">
                                    <h3> {{ $blog->title }}</h3> </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection