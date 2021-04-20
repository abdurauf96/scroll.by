@extends('layouts.app')

@section('content')
<div class="agancy_wrapper">
    @include('sections.header')

    <section class="section_agancy">
		<div class="container">
			<div class="top_line_developments">
				<div class="row">
					<div class="col-md-12">
						<div class="top_line_description inner_title" data-aos="fade-right" data-aos-delay="300">
							<h2 class="top_ttle">Агентство</h2> <span class="sub_mnu">
                                    Об агентстве                                </span> </div>
					</div>
				</div>
			</div>
			<div class="agancy_nav_mnu">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li class="active"><a href="agency" class="link">Об агентстве</a></li>
							<li><a href="reviews" class="link">Отзывы</a></li>
							<li><a href="jobs" class="link">Вакансии</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section_agancy two">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="block_text">
						<h2>Scroll Media Solutions</h2>
						<p>Прежде всего &mdash; это команда преданных своему делу профессионалов, которые готовы работать исключительно на результат и помочь своим клиентам в достижении поставленных целей.</p>
						<p>Вы желаете, чтобы Ваша идея стала успешной Ваш проект стал прибыльным? Команда Scroll Media Solutions знает, как это превратить в реальность!</p>
						<p>За 8 с лишним лет существования с нашей студией начали сотрудничество более 100 компаний из Республики Беларусь и Российской Федерации, часть из которых стали нашими стратегическими партнерами.</p>
						<p>Реализовано более 530 успешных проектов.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block_specialization">
						<h3>специализация </h3>
						<div><strong>Дизайн:</strong> Photoshop, Figma, Axure, Illustrator, Sketch</div>
						<div><strong>Верстка:</strong> Bootstrap, HTML5, CSS3, jQuery</div>
						<div><strong>Бэк-энд:</strong> 1С Битрикс, YII2, MODX, Laravel</div>
						<div><strong>Технологии:</strong> Node JS, HTML5, CSS3, Gulp.js, React, JS, SQL, Vue.js</div>
					</div>
				</div>
			</div>
			<div class="info_block">
				<div class="row">
					<div class="col-md-6 work_year_bg" data-aos="fade-up"> <img src="assets/images/work_year_bg.png" alt=""> </div>
					<div class="col-md-6 about_us_info" data-aos="fade-up">
						<h2>Делаем классные сайты, дизайним, продвигаем и рекламируем</h2>
						<p>Для нас очень важно, чтобы наши проекты помогали клиентам в ежедневной работе, помогали росту компаний, и положительному отклику пользователей.</p>
						<p>Мы создаем функциональные сайты, придумываем узнаваемый брендинг, проектируем интерфейсы, рекламируем в Яндекс и Google, занимаемся SEO продвижением, продвигаем в соцсетях, пишем контент для сайтов и разрабатываем мобильные приложения. А также поддерживаем проекты своих клиентов.</p>
					</div>
				</div>
			</div>
			<div class="info_block_approach">
				<div class="row">
					<div class="col-md-12">
						<h2>Подход</h2> </div>
				</div>
				<div class="info_block_text">
					<div class="row">
						<div class="col-sm-12 col-md-6 block wow fadeInUp" data-wow-delay=".2s">
							<h3>Качество</h3>
							<p>Любой проект должен быть сделан качественно!</p>
						</div>
						<div class="col-sm-12 col-md-6 block wow fadeInUp" data-wow-delay=".2s">
							<h3>Эффективность</h3>
							<p>Должен быть выбран оптимальный путь решения задачи не в ущерб желанию клиента и эффективности проекта</p>
						</div>
						<div class="col-sm-12 col-md-6 block wow fadeInUp" data-wow-delay=".2s">
							<h3>Пунктуальность</h3>
							<p>Клиент должен получать результаты работ в оговоренные сроки</p>
						</div>
						<div class="col-sm-12 col-md-6 block wow fadeInUp" data-wow-delay=".2s">
							<h3>Постоянная активность</h3>
							<p>Мы постоянно делаем предложения по решению тех или иных задач, предварительно согласовывая их с клиентом</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="our_clients">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2>Наши клиенты</h2> </div>
					<div class="col-sm-12 col-md-5">Мы гордимся и ценим наших клиентов, ведь именно они доверили нам развитие своего бизнеса!</div>
				</div>
				<div class="block_logo_clients">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-krona.png')"></div>
							<!-- <img src="assets/images/logo-krona.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/partners.png')"></div>
							<!-- <img src="assets/images/partners.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/flavia_logo.png')"></div>
							<!-- <img src="assets/images/flavia_logo.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/fornelli-logo.png')"></div>
							<!-- <img src="assets/images/fornelli-logo.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo_welcom.jpg')"></div>
							<!-- <img src="assets/images/logo_welcom.jpg" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/header_logo123.png')"></div>
							<!-- <img src="assets/images/header_logo123.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-atlant.png')"></div>
							<!-- <img src="assets/images/logo-atlant.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-zavod.png')"></div>
							<!-- <img src="assets/images/logo-zavod.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-eczon.png')"></div>
							<!-- <img src="assets/images/logo-eczon.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-adams-min.png')"></div>
							<!-- <img src="assets/images/logo-adams-min.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo_medvedica.png')"></div>
							<!-- <img src="assets/images/logo_medvedica.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo_zavod.png')"></div>
							<!-- <img src="assets/images/logo_zavod.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/svetlachok.png')"></div>
							<!-- <img src="assets/images/svetlachok.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/novalux-logo-fin.svg')"></div>
							<!-- <img src="assets/images/novalux-logo-fin.svg" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-preloader-firm.png')"></div>
							<!-- <img src="assets/images/logo-preloader-firm.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-ibolit.png')"></div>
							<!-- <img src="assets/images/logo-ibolit.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-color-print.png')"></div>
							<!-- <img src="assets/images/logo-color-print.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-belcredo.png')"></div>
							<!-- <img src="assets/images/logo-belcredo.png" alt=""> --></div>
						<div class="col-6 col-md-6 col-lg-3 block wow fadeInUp" data-wow-delay=".1s">
							<div class="block-bg" style="background-image: url('assets/images/logo-chicpa.png')"></div>
							<!-- <img src="assets/images/logo-chicpa.png" alt=""> --></div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<h2>Мы стараемся сделать ваш бизнес ярче и успешней. Ценим ваше время и работаем качественно.</h2> </div>
				</div>
			</div>
		</div>
		@include('sections.form')
	</section>

</div>

@endsection