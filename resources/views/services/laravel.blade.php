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
			<div class="services_content services_content-top">
				<div class="row">
					<div class="col-md-8">
						<h2>Разработка сайтов на фреймворке Laravel</h2>
						<p>Laravel — это удобный и популярный php-фреймворк, предназначенный для разработки сайтов. Обладает открытым исходным кодом, что позволяет его дорабатывать, адаптируя под любые проекты. Laravel-фреймворк основан на компонентах Symfony, поэтому в нем применяется кодовая база высокого качества.</p>
					</div>
					<div class="col-md-4">
						<div class="sheet"> <img src="/img/laravel-logo.png" alt="" data-aos="fade-up">
							<p>Разработка сайтов на Laravel подходит для проектов любого уровня сложности.</p>
						</div>
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
						<h2>Для чего разработка на Laravel подходит лучше всего:</h2> </div>
				</div>
				<div class="block-target-items">
					<div class="row">
						<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
							<div class="item-img" style="background-image: url('/img/landing-icon.png')"></div>
							<div class="item-info"> Корпоративные и личные проекты </div>
						</div>
						<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
							<div class="item-img" style="background-image: url('/img/site-icon.png')"></div>
							<div class="item-info"> Интернет-магазины </div>
						</div>
						<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
							<div class="item-img" style="background-image: url('/img/promo-icon.png')"></div>
							<div class="item-info"> Стартапы </div>
						</div>
						<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
							<div class="item-img" style="background-image: url('/img/we-developing-img4.png')"></div>
							<div class="item-info"> Маркетплейсы </div>
						</div>
						<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
							<div class="item-img" style="background-image: url('/img/we-developing-img5.png')"></div>
							<div class="item-info"> Социальные сети </div>
						</div>
						<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
							<div class="item-img" style="background-image: url('/img/we-developing-img6.png')"></div>
							<div class="item-info"> Онлайн-сервисы </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="button-block text-center"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="services-inner-info serv-info-bitrix serv-info-bitrix-red">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="d-flex align-items-center serv-bx-title">Премущества создания сайта на фреймворке<img src="/img/img-laravel-logo.png" style="width:auto;"  alt="" class="ml-4"></h2> </div>
						<div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
							<div class="item-icon" style="background-image:url('/img/icon/modx-icon3.png')"></div>
							<h3>Структура и логика любой сложности
и надежность</h3>
							<p>Фреймворк позволяет создать сложную многоуровневую архитектуру, где возможно учесть любые требования к ресурсу.</p>
						</div>
						<div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
							<div class="item-icon" style="background-image:url('/img/icon/laravel-icon-1.png')"></div>
							<h3>Высокая 
производительность</h3>
							<p>По сравнению с «коробочными» ресурсами, созданными на базе различных CMS, сайты на Laravel работают гораздо быстрее благодаря продуманной архитектуре</p>
						</div>
						<div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
							<div class="item-icon" style="background-image:url('/img/icon/modx-icon1.png')"></div>
							<h3>Безопасность 
и комфорт работы</h3>
							<p>Внутренняя информация на сайте защищена от SQL, XSS и CSRF.. Как отмечают все те, кто выбирает разработку на Laravel, здесь очень комфортно работать, так как в случае необходимости сайт, который был создан ранее, можно видоизменить.</p>
						</div>
						<div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
							<div class="item-icon" style="background-image:url('/img/icon/modx-icon4.png')"></div>
							<h3>Простота 
администрирования</h3>
							<p>Доступна гибкая настройка административной панели под нужды владельца ресурса</p>
						</div>
						<div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
							<div class="item-icon" style="background-image:url('/img/icon/laravel-icon-2.png')"></div>
							<h3>Возможность 
масштабирования </h3>
							<p>Laravel обеспечивает возможность развития ресурса и расширения его функционала.Важно создавать сайт с учетом его последующего развития. В этом случае вы сможете дорабатывать ресурс и дополнять его новыми инструментами без значительных расходов на услуги программистов</p>
						</div>
						<div class="col-12 col-sm-6 col-md-4 item" data-aos="zoom-in">
							<div class="item-icon" style="background-image:url('/img/icon/modx-icon6.png')"></div>
							<h3>Очень 
быстрая работа</h3>
							<p>От скорости загрузки сайта зависит его ранжирование в поисковых системах, поэтому важно уделять этому фактору особое внимание. Благодаря мощному механизму кэширования страниц, сайты на MODX загружаются очень быстро.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="serv-info_block styled-ul link-underline-red">
				<div class="container">
					<h2 class="h2_style mb-5">Рад премуществ, выделяющих Laravel среди 
других платформ:</h2>
					<ul>
						<li>Работа с любой реляционной СУБД и поддержка NoSQL-решений</li>
						<li>Интеграция с Vue.Js, Memcached, Redis, ElasticSearch</li>
						<li>Кодовая база высокого качества на основе компонентов Symfony</li>
						<li>Функциональные инструменты для тестирования из коробки</li>
						<li>Высокая степень встроенной защиты от SQL-инъекций и XSS-атак</li>
						<li>Предустановленные модули экономят время и деньги на разработку.</li>
					</ul>
					<div>
						<p class="mt-5"><strong>Сайты на Laravel легко дорабатывать и поддерживать. Активное комьюнити разработчиков регулярно обновляет базовые модули (проведение платежей, авторизация), делая фреймворк актуальным в любое время. Любая доработка функционала обойдется дешевле, чем на разработанной под заказ платформе.</strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="development-stages">
			<div class="work-stages-red pt-10">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Почему вам стоить заказать сайт на Laravel <br> 
в Scroll Media</h2> </div>
					</div>
					<div class="row">
						<div class="col-md-6 item-serv-bx">
							<div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
								<div class="row">
									<div class="col-lg-2">
										<div class="circle c-blu">1</div>
									</div>
									<div class="col-lg-10">
										<h3>Используем все преимущества фреймворка Laravel</h3> </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 item-serv-bx">
							<div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
								<div class="row">
									<div class="col-lg-2">
										<div class="circle c-blu">2</div>
									</div>
									<div class="col-lg-10">
										<h3>Произвоидм предварительные исследования и анализ аудитории</h3> </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 item-serv-bx">
							<div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
								<div class="row">
									<div class="col-lg-2">
										<div class="circle c-blu">3</div>
									</div>
									<div class="col-lg-10">
										<h3>Создаем эффективные пользовательские интерфейсы</h3> </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 item-serv-bx">
							<div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
								<div class="row">
									<div class="col-lg-2">
										<div class="circle c-blu">4</div>
									</div>
									<div class="col-lg-10">
										<h3>Делаем устойчивые к нагрузке сайты с высоким уровнем безопасности</h3> </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 item-serv-bx">
							<div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
								<div class="row">
									<div class="col-lg-2">
										<div class="circle c-blu">5</div>
									</div>
									<div class="col-lg-10">
										<h3>Внедряем готовые модули или создаем новые с нуля</h3> </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 item-serv-bx">
							<div class="work-stages-item-left wow fadeInUp" data-wow-delay=".s">
								<div class="row">
									<div class="col-lg-2">
										<div class="circle c-blu">6</div>
									</div>
									<div class="col-lg-10">
										<h3>Тестируем и дорабатываем готовые проекты</h3> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
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