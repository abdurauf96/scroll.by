
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    
    <title>Scroll Media Solutions — Разработка и продвижение сайтов</title><meta name = "description" content = "" ><meta name="keywords" content="">        <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="/img/a-master-favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" defer href="{{ asset('fonts/FontAwesomePro/css/all.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="yandex-verification" content="837eae9361188a12" />
    <meta name="google-site-verification" content="rY2Y2-1aZ-tprl1P0pAwq3ZbJ3uHDeXOTCsr-YE05o8" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?..."></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-150883313-1');
    </script>
    @livewireStyles
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55919026, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55919026" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

 <script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.by/b3535105/crm/site_button/loader_2_o3kiqp.js');
</script>
<body style="height: 100%">

    <!--div class="curtain-transparent"></div>
    <div class="curtain"></div>
    <div class="cursor-follower pc" style="top: 352px; left: 1885px;"></div>
    <div class="cursor pc" style="top: 946px; left: 681px;"></div-->

    
      @yield('content')

      <footer class="ftr" style="background-image:url(/img/footer_bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 text-center">
                    <button type="submit" href="#request" data-toggle="modal" tabindex="0" class="btn-circle white btn-style-transparent" style="width:300px;">Оставить заявку<span></span></button>
                </div>
                <div class="col-12">
                    <div class="contact_info_block_1">
                        <div class="row">
                            <div class="col-md-4">
                                г. Барановичи, <br> ул. Притыцкого 67
                            </div>
                            <div class="col-md-4">
                                info@scroll.by
                            </div>
                            <div class="col-md-4">
                                <a href="tel:+375 44 588-77-11 
   ">
                                    +375 44 588-77-11 
                                </a>
   
                            </div>
                        </div>
                    </div>
                </div>
   
   
                <div class="contact_info_block_2 flex-row">
                    <div class="info_wrap"> 
                        <div class="info">
                            <span>skype:</span>
                            <p>scrollby</p>
                        </div>
                        <div class="info">
                            <span>viber:</span>
                            <p>+375 44 588-77-11</p>
                        </div>
                        <div class="info">
                            <span>telegram:</span>
                            <p>@scrollby</p>
                        </div>
                    </div>  
   
                    <div class="subscription_form">
                        <form action="/subscribe" method="post" id="subs_form">
                            @csrf
                            <div class="group">
                                <input type="email" name="email" required="required" id="sub_email"  ><span class="highlight"></span><span class="bar bar_file"></span>
                                <label>Подписаться на новости и акции<span class="clip"><i class="fas fa-right"></i></span> </label>
                            </div>
                            <button type="submit" class="button buttonTransparent"><img src="/img/arrow-leftt.png" alt=""></button>
                        </form>
                    </div>
   
   
                </div>
            </div>
        </div>
        <div class="footer_bottom confid" style="position: relative;">
            <div class="block_wrap_info_ftr">
                <div class="row">
                    <div class="col-md-4">
                        <div class="copyright">
                            &copy;2021 					</div>
                    </div>
                    <div class="col-md-4">
                        <div class="confid_politic text-center">
                            <!-- <a href="#privacy" data-toggle="modal" tabindex="0">Политика конфиденциальности</a> -->
                            <a href="#agreement" data-toggle="modal" tabindex="0">Условия обработки персональных данных</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="scrool-ftr">
                            <p>Scroll Media Solutions LLC <br> Все права защищены</p>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex flex-row">
                    <div class="social_link">
                        <div class="col text-center">
                            <ul>
                                                                 <li><a href="https://www.facebook.com/scrollmediaby/">facebook</a></li>
                                                                     <li><a href="https://www.instagram.com/scroll_media/">instagram</a></li>
                                                                     <li><a href="https://vk.com/scroll_media">vkontakte</a></li>
                                                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
   
                     <a href="https://ratingruneta.ru/e-commerce/belarus/middle/" class="cmsmagazine-rait" style="display: block; position: absolute; z-index: 99999;">
                   <img style="width: 149px;"
                     src="https://images.cmsmagazine.ru/diff/cms-badges-generated/ecom_global/13186/7efe6d99c11d8896dd83039fe9ee102c_badge_07d2802ede0415.png"
                     alt="Беларусь: рейтинг разработчиков интернет-магазинов в среднем сегменте"/></a>
            </div>
   
        </footer>
   
        <div class="to_top_wrap link">
            <div><span id="to_top"><i class="fal fa-chevron-up"></i></span></div>
        </div>
   
   
        <!-- -----------------Modals---------------------------- -->
   
        <div class="modals">
            <div class="modal fade" id="modal-succses" style="padding-right: 5px;">
                <div class="modal-dialog">
                    <div class="modal-content training">
                        <div class="modal-header" style="border-bottom:0">
                        </div>
   
                        <div class="modal-body">
                            <h2 class="text-center blue">Ваша заявка <br>принята</h2>
                            <div class="icon"><img src="/img/succses.png" alt=""></div>
                            <div class="text" style="margin-top: 20px;">Мы свяжемся с Вами в ближайшее
                                время для уточнения
                            деталей проекта</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modals">
            <div class="modal fade" id="modal-succses-review" style="padding-right: 5px;">
                <div class="modal-dialog">
                    <div class="modal-content training">
                        <div class="modal-header" style="border-bottom:0">
                        </div>
   
                        <div class="modal-body">
                            <h2 class="text-center blue">Спасибо за ваш <br>отзыв</h2>
                            <div class="icon"><img src="/img/succses.png" alt=""></div>
                            <div class="text" style="margin-top: 20px;">После модерации он появится у нас на сайте!<br>
                                        Будем рады дальнейшему сотрудничеству.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modals">
            <div class="modal fade" id="modal-succses-question" style="padding-right: 5px;">
                <div class="modal-dialog">
                    <div class="modal-content training">
                        <div class="modal-header" style="border-bottom:0">
                        </div>
   
                        <div class="modal-body" style="margin-top:30px;">
                            <h2 class="text-center blue">Ваша заявка <br>принята</h2>
                            <div class="icon"><img src="/img/succses.png" alt=""></div>
                            <div class="text" style="margin-top: 20px;">Мы свяжемся с Вами в ближайшее
                                время для уточнения
                            деталей</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modals">
            <div class="modal fade" id="modal-succses-subs" style="padding-right: 5px;">
                <div class="modal-dialog">
                    <div class="modal-content training">
                        <div class="modal-header" style="border-bottom:0">
                        </div>
   
                        <div class="modal-body">
                            <h2 class="text-center blue">Вы подписаны</h2>
                            <div class="icon"><img src="/img/succses.png" alt=""></div>
                            <div class="text" style="margin-top: 20px;">Спасибо за интерес к нашей компании</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modals_reviews">
            <div class="modal fade in" id="reviews_pdf" style="padding-right: 5px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span><img src="/img/close.svg" alt=""></span>
                </button>
                <div class="modal-dialog modal-style">
                    <div class="modal-content training">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body">
                            <h2 class="text-center blue">Отзыв</h2>
                            <div>
                                <p>Отзыв Отзыв Отзыв 
                                    ОтзывОтзывОтзывОтзывОтзы
                                    вОтзывОтзы
                                    вОтзывОтзыв Отзыв ОтзывОтзывОтзывОт
                                зывОтзывОтзывОтзывОтзывОтзывОтзыв</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
   
        <div class="modals-new-reviews">
            <div class="modal fade in" id="reviews-new" style="padding-right: 5px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span><img src="/img/close.svg" alt=""></span>
                </button>
                <div class="modal-dialog modal-style">
                    <div class="modal-content training">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body">
                            <h2 class="text-center blue">Оставить отзыв</h2>
                            <form action="#" id="review_form" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                                
                                <input type="hidden" value="Оставить отзыв" name="subject">
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
                                            <input type="text" name="company" required><span class="highlight"></span><span class="bar"></span>
                                            <label>Название организации</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group icon" style="border-bottom: 1px solid #000;">
                                            <input type="file" class="chooseFileRev" style="opacity:0;" name="file">
                                            <label>Прикрепить фото<span class="clip"><i class="fal fa-paperclip"></i></span> </label>
                                            <div class="text-file-rev"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group">
                                            <input type="text" name="comment" required><span class="highlight"></span><span class="bar"></span>
                                            <label>Комментарий</label>
                                        </div>
                                    </div>
                                </div>
   
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="group_check">
                                            <input type="checkbox" class="option-input checkbox"/>
                                            <label>Согласие на обработку  персональных данных</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-circle btn-style-red">Оставить отзыв<span></span></button>
                                    </div>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modals_privacy_policy">
            <div class="modal fade" id="privacy" style="padding-right: 5px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span><img src="/img/close.svg" alt=""></span>
                </button>
                <div class="modal-dialog modal-style">
                    <div class="modal-content training">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body">
                            <h2 class="text-center blue">Политика конфиденциальности</h2>
                            <div>Политика конфиденциальности Политика конфиденциальности
                            Политика конфиденциальности Политика конфиденциальности Политика конфиденциальностиПолитика конфиденциальности Политика конфиденциальности Политика конфиденциальности</div>
   
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modals_agreement">
            <div class="modal fade agreement" id="agreement" style="padding-right: 5px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span><img src="/img/close.svg" alt=""></span>
                </button>
                <div class="modal-dialog modal-style">
   
                    <div class="modal-content training">
                        <div class="modal-header" style="border-bottom:0">
                        </div>
                        <div class="modal-body">
                            <h2 class="text-center blue">Условия обработки персональных данных</h2>
                            <div><p>
                                Условия, с которыми клиент соглашается, отправляя электронный адрес и номер мобильного телефона через формузаявки и подписки.
                                <br>
                                Данное соглашение разработано в соответствии с требованиями действующего законодательства Республики Беларусь, Закона Республики Беларусь от 10.11.2008 №455-З «Об информации, информатизации и защите информации». Все лица, заполнившие Форму заявки, подтверждают, что полностью ознакомлены и согласны с условиями настоящего Соглашения, в частности подтверждают свое согласие:<br>
                                <br>
                                на осуществление Компанией сбора, обработки и хранения указанных в регистрационной форме персональных данных;<br>
                                <br>
                                на включение предоставленной информации (обратная связь, персональные данные) в базу Компании;<br>
                                <br>
                                на использование персональных данных для рассылки новостей Компании, приглашений на мероприятия Компании (мероприятия партнеров Компании);<br><br>
   
                                на последующую передачу Компанией указанных в регистрационной форме персональных данных третьим лицам для обработки и хранения персональных данных.<br>
                                <br>
                                При этом гражданин вправе отозвать согласие на использование персональных данных, направив Компании письменное уведомление по адресу: 225320, г. Барановичи, ул. Притыцкого 67, офис 1. В случае получения уведомления об отзыве согласия на использование персональных данных Компания, а также третьи лица, которым переданы персональные данные, прекращают обработку персональных данных и уничтожают данные в течение 5 (пяти) рабочих дней с даты получения отзыва.<br>
                                <br>
                                Гражданин гарантирует, что данные, содержащиеся в регистрационной форме, являются достоверными; при предоставлении информации не нарушается действующее законодательство Республики Беларусь, законные права и интересы третьих лиц.
                            </p>
                        </div>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="request" style="padding-right: 5px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span><img src="/img/close.svg" alt=""></span>
        </button>
        <div class="modal-dialog modal-style">
            <div class="modal-content training">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <h2 class="text-center">Оставить заявку</h2>
                    <div class="email_main">
                        <div class="email_form">
                            <form action="#" id="zayafka_form" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                               @csrf
                               <input type="hidden" value="Оставить заявку" name="subject">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group">
                                            <input type="text" class="name" name="name"  required><span class="highlight "></span><span class="bar"></span>
                                            <label>Представьтесь, пожалуйста</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group">
                                            <input type="text" class="phone" name="phone" required><span class="highlight"></span><span class="bar"></span>
                                            <label>Номер Вашего телефона</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group">
                                            <input type="email" class="email" name="email" required><span class="highlight"></span><span class="bar"></span>
                                            <label>Ваш e-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group select icon">
                                            <select name="service" class="service">
                                                <option value="" >Выберите необходимую услугу</option>
                                                @foreach ($services as $ser)
                                                <option value="{{ $ser->title }}">{{ $ser->title }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group icon" style="border-bottom: 1px solid #000;">
                                            <input type="file" class="chooseFile file" style="opacity:0;" name="file">
                                            <label>Прикрепить файл (бриф) <span class="clip"><i class="fal fa-paperclip"></i></span> </label>
                                            <div class="text-file-req"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="group">
                                            <input type="text" name="comment" class="comment"><span class="highlight"></span><span class="bar"></span>
                                            <label>Комментарий</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="group_check">
                                            <input type="checkbox" class="option-input checkbox" required/>
                                            <label>Согласие на обработку  персональных данных</label>
                                        </div>
                                    </div>
                                </div>
                                    <button type="submit" class="btn-circle btn-style-red btn-true">Отправить заявку<span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="get-consultation" style="padding-right: 5px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span><img src="/img/close.svg" alt=""></span>
        </button>
        <div class="modal-dialog modal-style consultation">

            <div class="modal-content training">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <h2 class="text-center">Получить консультацию</h2>
                    <div class="email_main">
                        <form action="#" method="POST" id="get_consult" accept-charset="utf-8" enctype="multipart/form-data">
                           
                            <input type="hidden" value="Получить консультацию" name="subject">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="group">
                                        <input type="text" name="name" required><span class="highlight"></span><span class="bar"></span>
                                        <label>Представьтесь, пожалуйста</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="group">
                                        <input type="text" name="phone"  required><span class="highlight"></span><span class="bar"></span>
                                        <label>Номер Вашего телефона</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="group_check">
                                        <input type="checkbox" class="option-input checkbox" required/>
                                        <label>Согласие на обработку  персональных данных</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-circle btn-style-red">Отправить заявку<span></span></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="сalculate-cost" style="padding-right: 5px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span><img src="/img/close.svg" alt=""></span>
        </button>
        <div class="modal-dialog modal-style consultation">

            <div class="modal-content training">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <h2 class="text-center">Рассчитать стоимость</h2>
                    <div class="email_main">
                        <form action="/app/mail" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                            <input type="hidden" value="info@scroll.by" name="mail">
                            <input type="hidden" value="Получить консультацию" name="subject">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="group">
                                        <input type="text" name="Имя"  required><span class="highlight"></span><span class="bar"></span>
                                        <label>Представьтесь, пожалуйста</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="group">
                                        <input type="text" name="Телефон"  required><span class="highlight"></span><span class="bar"></span>
                                        <label>Номер Вашего телефона</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="group_check">
                                        <input type="checkbox" class="option-input checkbox" required/>
                                        <label>Согласие на обработку  персональных данных</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-circle btn-style-red">Отправить заявку<span></span></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @livewireScripts
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/libs-scripts.min.js') }}"></script>
    <!-- <script type="text/javascript">
        if (screen.width > 480) document.write ('<script type="text/javascript" src="/js/TweenMax.min.js" ></sc' + 'ript>');
    </script> -->
    <!-- <script src="/js/TweenMax.min.js"></script> -->
    <!-- <script src="/js/cursor.js"></script> -->
    <script src="{{ asset('js/aos.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!--script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},150);};</script-->
    <script>
        update_img();
    
        var wow = new WOW(
        {
            offset: 100,
        }
        );
        wow.init();
    </script>
    <script >AOS.init({
        duration: 1000,
        once: true
    });</script>
            <script>
   (function(w,d,u){
   var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
   var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
   })(window,document,'https://cdn-ru.bitrix24.by/b3535105/crm/tag/call.tracker.js');
   </script>
                                 
        </body>
        </html>
   
   
   <script>
       $(document).ready(function(){
           [].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
             img.setAttribute('src', img.getAttribute('data-src'));
             img.onload = function() {
            img.removeAttribute('data-src');
             };
           });
       });

        // $(document).ready(function () {
            

        //     var url = window.location.href;
        //     var res = url.split("/");
        //     var pos = res.indexOf('category');
        //     if(pos==3){
        //         document.getElementById( 'our_works' ).scrollIntoView();
        //     }
            
        // });
   </script>
     