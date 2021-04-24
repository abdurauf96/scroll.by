@extends('layouts.app')

@section('content')
<div class="services_wrapper">
    @include('sections.header')

    <section class="section_services_list services_inner_seo services_inner_style_design" style="background-image: url('/img/services-seo/bg-inner-linnear.png')">
		<div class="container">
			<div class="row">
				<div class="top_line_developments_wrapper">
					<div class="top_line_developments">
						<div class="col-md-12">
							<div class="top_line_description inner_title">
								<h2 class="top_ttle"><a href="/service" class="link">Услуги</a></h2> <span class="sub_mnu" data-aos="fade-right">Фирменный стиль и дизайн</span> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="services_content">
				<div class="row">
					<div class="col-md-8">
						<h2>Фирменный стиль и айдентика</h2>
						<h3>Фирменный стиль &ndash; это фундамент, на котором строится имидж и визуальный образ компании.</h3> </div>
					<div class="col-md-4">
						<div class="sheet"> <img src="/assets/images/img_style_and_design.png" alt="" data-aos="zoom-in">
							<p>Брендинг и айдентика помогают бизнесу налаживать прочную
								<br /> эмоциональную, связь с потребителем.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-target-customers custom first">
			<div class="bg" style="background-image: url('/img/services-design/bg_services_inner_design.png')"></div>
			<div class="container">
				<div class="row">
					<div class="block-target-title col-md-12">
						<div class="block-target-img"> <img src="/img/serv-sheet2.png" alt=""> </div>
						<h2>Что такое фирменный стиль</h2> </div>
				</div>
				<div class="block-what-is-smm seo design">
					<div class="row">
						<div class="item col-sm-12 col-md-6" data-aos="fade-right">
							<div class="item-img" style="background-image: url('/assets/images/branding.svg')"> </div>
						</div>
						<div class="item col-sm-12 col-md-6">
							<div class="item-info text-left">
								<h2>Брендинг, айдентика, фирменный стиль</h2>
								<p>Важной составляющей построения визуальной коммуникации с потребителем при создании и продвижении сайта является графическая упаковка бренда. Маркетинговая сторона ведения бизнеса &mdash; это сила, продвигающая компанию на первые позиции в конкурентной среде.</p>
								<p>Мы создаем визуальную концепцию вашей компании после тщательного анализа конкурентов, определения вашей целевой аудитории, принимая во внимание социальные факторы и прогнозируя конечные цели. Правильно проработанный имидж компании формирует позитивное восприятие вашего бренда клиентами.</p>
							</div>
							<div class="button-dlock text-left wow fadeInUp" data-wow-delay=".7s"> <a href="#get-consultation" data-toggle="modal" class="btn-circle white btn-red">Получить консультацию<span></span></a> </div>
						</div>
					</div>
				</div>
				<div class="block-target-customers custom">
					<!-- <div class="bg_line_top" style="background-image: url('/img/linnear_bg_serv.png')"></div> -->
					<div class="container">
						<div class="row">
							<div class="block-target-title col-md-12">
								<h2>Как мы работаем</h2> </div>
						</div>
						<div class="block-target-items">
							<div class="row">
								<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
									<div class="item-img" style="background-image: url('/assets/images/fs-blok1.svg')">
										<div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
									</div>
									<div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".3s">1</span>
										<p>Сбор всей
											<br> информации</p>
									</div>
								</div>
								<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
									<div class="item-img" style="background-image: url('/assets/images/fs-blok2.svg')">
										<div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
									</div>
									<div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".5s">2</span>
										<p>Генерация
											<br> идей</p>
									</div>
								</div>
								<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
									<div class="item-img" style="background-image: url('/assets/images/fs-blok3.svg')">
										<div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
									</div>
									<div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".7s">3</span>
										<p>Создание
											<br> концепции</p>
									</div>
								</div>
								<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1.2s">
									<div class="item-img" style="background-image: url('/assets/images/fs-blok4.svg')">
										<div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
									</div>
									<div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".3s">4</span>
										<p>Утверждение
											<br> логотипа</p>
									</div>
								</div>
								<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
									<div class="item-img" style="background-image: url('/assets/images/fs-blok5.svg')">
										<div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
									</div>
									<div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".5s">5</span>
										<p>Определение
											<br> фирменных цветов
											<br> и шрифтов</p>
									</div>
								</div>
								<div class="item col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.2s">
									<div class="item-img" style="background-image: url('/assets/images/fs-blok6.svg')">
										<div class="bg-circle-item"><img src="/assets/images/round.svg" alt=""></div>
									</div>
									<div class="item-info"> <span class="wow fadeInUpp" data-wow-delay=".7s">6</span>
										<p>Разработка элементов
											<br> фирменного стиля</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="info-block-services_inner_style_design" style="background-image:url('/img/bg_services_inner_seo_3.png')">
				<div class="col-md-6">
					<p>Завершающий этап создания фирменного стиля компании &ndash; это
						<br /> брендбук, который является основным документом для дальнейшего изготовления
						<br /> различной рекламной продукции.
						<br />
						<br /> Этот этап не является основным и важным, но рекомендуется, поэтому в
						<br /> договоре с заказчиком он оговаривается отдельно и может быть выполнен
						<br /> только с его согласия.</p>
				</div>
			</div>
			<div class="section-seo-contractor" style="background-image: url('/img/services-design/bg_services_inner_design1.png');">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Основные элементы фирменного стиля</h2> </div>
						<div class="col-6 col-sm-6 col-md-5 item">
							<div data-aos="zoom-in">
								<div class="item-icon" style="background-image:url('/assets/images/icon-design-1.png')"></div>
								<p>Фирменный
									<br> логотип</p>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 item">
							<div data-aos="zoom-in">
								<div class="item-icon" style="background-image:url('/assets/images/icon-design-2.png')"></div>
								<p>Фирменный
									<br> слоган</p>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-3 item">
							<div data-aos="zoom-in">
								<div class="item-icon" style="background-image:url('/assets/images/icon-design-3.png')"></div>
								<p>Фирменные
									<br> визитки</p>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-5 item">
							<div data-aos="zoom-in">
								<div class="item-icon" style="background-image:url('/assets/images/icon-design-4.png')"></div>
								<p>Фирменный
									<br> бланк</p>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 item">
							<div data-aos="zoom-in">
								<div class="item-icon" style="background-image:url('/assets/images/icon-design-5.png')"></div>
								<p>Фирменный
									<br> конверт</p>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-3 item">
							<div data-aos="zoom-in">
								<div class="item-icon" style="background-image:url('/assets/images/icon-design-6.png')"></div>
								<p>Фирменная
									<br> папка</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 offset-lg-3 col-lg-7 item-bg">
							<p>Кроме основных элементов фирменного стиля, существуют и дополнительные, которые мы можем также разработать: фирменная полиграфия (буклеты, плакаты, упаковка, в том числе и пакеты) сувенирная корпоративная продукция, POS-материалы, мультимедийная презентация, прайс-листы, разработка фирменной униформы для сотрудников, брендирование автотранспортных средств компании, оформление точек розничных продаж, наружная реклама.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-sentence">
				<div class="top_line_description">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="top_line_description wow fadeInUp">
									<h2 class="pr">Наши работы</h2> </div>
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
				@livewire('projects-component', ['active'=>request()->segment(2)])
			</div>
			@include('sections.form')
	</section>
</div>
@endsection