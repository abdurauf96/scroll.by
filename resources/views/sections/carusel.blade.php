<div class="main-carousel-wrapper">
	<div class="slick-main-carousel">
    @foreach ($slayders as $slayd)
    <div class="item-owl">
			<div class="slider_img" style="background-image:url({{ Voyager::image($slayd->image) }})">
				<!-- <img src="" data-lazy="img/header_bg.jpg" class="full-image animated" alt="" data-animation-in="zoomInImage"/> --></div>
			<div class="header_descrition">
				<div class="header_descrition_inner">
					<h2 class="animated" data-animation-in="fadeInUp">{!! $slayd->title !!}</h2>
					<p class="animated" data-animation-in="fadeInUp" data-delay-in="0.5"> </p> <a class="btn-circle white btn-style-transparent" href="#get-consultation" data-toggle="modal" data-animation-in="fadeInUp" data-delay-in="0.8">Получить консультацию<span></span></a> </div>
			</div>
		</div>
    @endforeach
		
	</div>
	<div class="stack-technology">
		<div class="container">
			<div class="stack-technology-wrap">
				<div class="stack-technology-item"> <img src="img/stack-technology/google-logo.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/yandex_logo_ru.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/1c-bitrix-logo.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/modx-black-solid.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/laravel-logo.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/node-logo.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/react-logo.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/Java-Logo.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/html5-1.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/html5-2.png" alt=""> </div>
				<div class="stack-technology-item"> <img src="img/stack-technology/css-1.png" alt=""> </div>
			</div>
		</div>
	</div>
</div>