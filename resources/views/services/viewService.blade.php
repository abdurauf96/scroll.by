@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list services_inner_website">
        <div class="container">
            <div class="row">
                <div class="top_line_developments_wrapper">
                    <div class="top_line_developments">
                        <div class="col-md-12">
                            <div class="top_line_description inner_title">
                                <h2 class="top_ttle"><a href="/services" class="link">Услуги</a></h2> <span class="sub_mnu" data-aos="fade-right">{{ $service->service->title }}</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="row">
                    <div class="col-md-8">
                        <h2>{{ $service->first_block_title }}</h2>
                        <h3>{{ $service->first_block_body }}</h3> </div>
                    <div class="col-md-4">
                        <div class="sheet"> <img src="{{ Voyager::image($service->first_block_right_image) }}" alt="" data-aos="fade-up">
                            <p>{{ $service->first_block_right_text }}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="button-block"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-target-customers custom">
            <div class="bg_services_inner_seo" style="background-image:url('/img/services_website_dev/bg_services_website_1.png')"></div>
            <div class="bg_services_inner_wedsite" style="background-image: url('/img/services_website_dev/bg_services_website_2.png')"></div>
            <div class="container">
                @if ($service->second_block_item1!='')
                <div class="row">
                    <div class="block-target-title col-md-12">
                        <div class="block-target-img"> <img src="/img/serv-sheet2.png" alt=""> </div>
                        <h2>Мы разрабатываем</h2> </div>
                </div>
                <div class="block-target-items">
                    <div class="row">
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('{{ Voyager::image($service->second_block_item1_icon) }}')"></div>
                            <div class="item-info"> {{ $service->second_block_item1 }} </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('{{ Voyager::image($service->second_block_item2_icon) }}')"></div>
                            <div class="item-info"> {{ $service->second_block_item2 }} </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('{{ Voyager::image($service->second_block_item3_icon) }}')"></div>
                            <div class="item-info"> {{ $service->second_block_item3 }} </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('{{ Voyager::image($service->second_block_item4_icon) }}')"></div>
                            <div class="item-info"> {{ $service->second_block_item4 }} </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('{{ Voyager::image($service->second_block_item5_icon) }}')"></div>
                            <div class="item-info"> {{ $service->second_block_item5 }} </div>
                        </div>
                        <div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
                            <div class="item-img" style="background-image: url('{{ Voyager::image($service->second_block_item6_icon) }}')"></div>
                            <div class="item-info"> {{ $service->second_block_item6 }} </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @if ($service->third_block_body!='')
            <div class="services-inner-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-8 offset-lg-2">
                           {!! $service->third_block_body !!}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if ($service->four_block_title!='')
            <div class="performance-indicators">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{ $service->four_block_title }}</h2> </div>
                        <div class="col-md-5 col-sm-6 item-performance" data-aos="fade-up"> <span>{{ $service->four_block_item1_number  }}</span>
                            <p>{{ $service->four_block_item1_text  }}</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>{{ $service->four_block_item2_number  }}</span>
                            <p>{{ $service->four_block_item2_text  }}</p>
                        </div>
                        <div class="col-md-3 col-sm-6 item-performance" data-aos="fade-up"> <span>{{ $service->four_block_item3_number  }}</span>
                            <p>{{ $service->four_block_item3_text  }}</p>
                        </div>
                        <div class="col-md-5 col-sm-6 item-performance" data-aos="fade-up"> <span>{{ $service->four_block_item4_number  }}</span>
                            <p>{{ $service->four_block_item4_text  }}</p>
                        </div>
                        <div class="col-md-4 col-sm-6 item-performance" data-aos="fade-up"> <span>{{ $service->four_block_item5_number  }}</span>
                            <p>{{ $service->four_block_item5_text  }}</p>
                        </div>
                        <div class="col-md-3 col-sm-6 item-performance" data-aos="fade-up"> <span>{{ $service->four_block_item6_number  }}</span>
                            <p>{{ $service->four_block_item6_text  }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @if ($service->five_block_title!='')
        <div class="development-stages" style="background-image: url('/img/services_website_dev/bg_services_website_mac.png')">
            <div class="work-stages-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{ $service->five_block_title }}</h2> </div>
                        <div class="col-md-6">
                            <div class="row">
                                @if ($service->five_block_item1!='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">1</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item1 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($service->five_block_item2!='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">2</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item2 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($service->five_block_item3!='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">3</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item3 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($service->five_block_item4!='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">4</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item4 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                               @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                @if ($service->five_block_item5!='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">5</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item5 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($service->five_block_item6!='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">6</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item6 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($service->five_block_item7='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">7</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item7 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if ($service->five_block_item8!='')
                                <div class="col-md-12 work-stages-item">
                                    <div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="circle">8</div>
                                            </div>
                                            <div class="col-lg-10">
                                                <h3>{{ $service->five_block_item8 }}</h3> </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if ($service->six_block_title!='')
        <div class="section-seo-contractor">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $service->six_block_title }}</h2> </div>
                    <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in">
                        <div class="item-icon" style="background-image:url('{{ Voyager::image($service->six_block_item1_icon ) }}')"></div>
                        <p>{{ $service->six_block_item1_title }}</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in" data-aos-delay="50">
                        <div class="item-icon" style="background-image:url('{{ Voyager::image($service->six_block_item2_icon ) }}')"></div>
                        <p>{{ $service->six_block_item2_title }}</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in" data-aos-delay="200">
                        <div class="item-icon" style="background-image:url('{{ Voyager::image($service->six_block_item3_icon ) }}')"></div>
                        <p>{{ $service->six_block_item3_title }}</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in" data-aos-delay="350">
                        <div class="item-icon" style="background-image:url('{{ Voyager::image($service->six_block_item4_icon ) }}')"></div>
                        <p>{{ $service->six_block_item4_title }}</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in" data-aos-delay="500">
                        <div class="item-icon" style="background-image:url('{{ Voyager::image($service->six_block_item5_icon ) }}')"></div>
                        <p>{{ $service->six_block_item5_title }}</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 item" data-aos="zoom-in" data-aos-delay="650">
                        <div class="item-icon" style="background-image:url('{{ Voyager::image($service->six_block_item6_icon ) }}')"></div>
                        <p>{{ $service->six_block_item6_title }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif     
      
        <!-- <div class="bg_line_top" style="background-image: url('img/linnear_bg_serv.png')"></div> -->
        <div class="section-sentence inner_website">
            {{-- <div class="top_line_description">
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
            @livewire('projects-component', ['active'=>request()->segment(2)]) --}}
            @if ($service->seven_block_text!='')
            <div class="block-content-2">
                <div class="row">
                    <div class="bg_services_inner_seo_3" style="background-image:url('/img/bg_services_inner_seo_3.png')"></div>
                    <div class="col-md-10 offset-md-2 col-lg-6 offset-lg-2">
                        <p>{{ $service->seven_block_text }}</p>
                    </div>
                </div>
            </div>
            @endif
            @include('sections.form')
        </div>
    </section>
</div>
@endsection