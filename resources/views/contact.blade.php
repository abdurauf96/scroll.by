@extends('layouts.app')

@section('content')
<div class="contacts_wrapper">
    @include('sections.header')

    <section class="sectio_contacts">
        <div class="container">
            <div class="top_line_developments">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
                            <h2 class="top_ttle">Контакты</h2>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="agancy_nav_mnu">
                <div class="row">
                    <div class="col-md-12">
                        <ul></ul>
                    </div>
                </div>
            </div>
            <div class="block_contacts">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="block_contacts_wrapper">
                            <span>Звоните</span>
                            <p class="numb_font">
                                <a
                                    href="tel:+375 44 588-77-11" >
                                    +375 44 588-77-11
                                </a>
                                <span class="text">Дополнительные номера</span>
                                <span class="dop-phone"><a href="tel:+375 29 790-76-54">+375 29 790-76-54</a></span>
                                <span class="dop-phone"><a href="tel:+375 44 722-80-11">+375 44 722-80-11</a></span>
                            </p>
                            <span>Пишите</span>
                            <p>info@scroll.by</p>
                            <span>Заезжайте</span>
                            <p>
                                г. Барановичи, <br />
                                ул. Притыцкого 67
                            </p>
                            <span>Мы в мессенджерах</span>
                            <div class="block_contacts_icon">
                                <a href="viber://chat?number=+375 44 588-77-11" target="_blank" class="v_soc"><i class="fab fa-viber"></i></a>
                                <a href="skype:scrollby?chat" class="s_soc" target="_blank"><i class="fab fa-skype"></i></a>
                                <a href="https://telegram.me/@scrollby" class="t_soc" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                                <a href="whatsapp://send?phone=+26726274698274" class="w_soc" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 form-cont">
                        <form class="send_resume" id="send_question" action="#" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                           
                            <input type="hidden" value="Задайте вопрос" name="subject" />
                            
                            <h3>Задайте вопрос</h3>
    
                            <div class="form">
                                <div class="group">
                                    <input type="name" name="name" required="required" pattern="^[а-яА-ЯеЁa-zA-Z\ \t]+$" /><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Представьтесь, пожалуйста<span class="clip"></span> </label>
                                </div>
                                <div class="group">
                                    <input type="number" name="phone" /><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Номер Вашего телефона<span class="clip"></span> </label>
                                </div>
                                <div class="group">
                                    <input type="email" name="email" required="required" pattern="[a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]" /><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Ваш e-mail<span class="clip"></span> </label>
                                </div>
                                <div class="group">
                                    <input type="text" name="comment" /><span class="highlight"></span><span class="bar bar_file"></span>
                                    <label>Хотите что-то сказать?<span class="clip"></span> </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="group_check">
                                            <input type="checkbox" class="option-input checkbox" required />
                                            <label>Согласие на обработку персональных данных</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-circle btn-style-red">Отправить<span></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sections.form')
</div>
@endsection