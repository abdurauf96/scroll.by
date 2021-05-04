@extends('layouts.app')

@section('content')
<div class="jobs_wrapper">
    @include('sections.header')

    <section class="section_jobs">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
                            <h2 class="top_ttle">Агентство</h2> <span class="sub_mnu">
                                        Вакансии                                </span> </div>
                    </div>
                </div>
            </div>
            <div class="agancy_nav_mnu">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="/agency" class="link">Об агентстве</a></li>
                            <li><a href="/reviews" class="link">Отзывы</a></li>
                            <li class="active"><a href="/vacancy" class="link">Вакансии</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section_jobs_list">
                <form action="#" method="POST" id="zayafka_form" accept-charset="utf-8" enctype="multipart/form-data">
                   
                    <input type="hidden" value="Вакансии" name="subject">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="jobs_list">
                                <h3>Выберите интересующую вакансию</h3>
                                <div> </div>
                                @foreach ($vacancies as $item)
                                <div class="form-group">
                                    <input type="radio" name="service" value="{{ $item->title }}" class="option-input_radio" id="vakansii1" placeholder="">
                                    <label for="vakansii1">{{ $item->title }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="send_resume">
                                <h3>Отправить резюме</h3>
                                <div class="group">
                                    <input type="name" name="name" required="required" pattern="^[а-яА-ЯеЁa-zA-Z\ \t]+$"><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Представьтесь, пожалуйста<span class="clip"></span> </label>
                                </div>
                                <div class="group">
                                    <input type="number" name="phone" required="required"><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Номер Вашего телефона<span class="clip"></span> </label>
                                </div>
                                <div class="group">
                                    <input type="email" name="email" required="required" pattern="[a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]"><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Ваш e-mail<span class="clip"></span> </label>
                                </div>
                                <div class="group">
                                    <input type="file" class="chooseFilejob" name="file" style="opacity:0;"><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Прикрепить резюме<span class="clip"></span> </label>
                                    <div class="text-file-job"></div>
                                </div>
                                <div class="group">
                                    <input type="text" name="comment"><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Хотите что-то скзать?<span class="clip"></span> </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="group_check">
                                            <input type="checkbox" class="option-input checkbox" required/>
                                            <label>Согласие на обработку персональных данных</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-circle btn-style-red">Отправить резюме<span></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <p class="title_bottom">Мотивирован много работать и нацелен на результат? Напиши нам.</p>
            </div>
        </div>
    </section>
    
</div>
@endsection