<section class="section our_developments" id="our_developments">
	<div class="top_line_developments">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="top_line_description ml wow fadeInUp">
						<h2 class="top_ttle">Наши компетенции</h2> </div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="top_line_button main main-page">
						<button class="learn-more" href="#request" data-toggle="modal" onclick="yaCounter54419398.reachGoal ('battonorder'); return true;">
							<div class="circle-red"> <span class="icon">
             <img src="img/icon/edit.svg" alt="">
           </span> </div>
							<p class="button-text">Начать проект</p>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="developments_main">
		<div class="container-fluid pl-0">
			<div class="slider_develop_directions navs" data-aos="fade-up">
				@foreach ($services as $service)
				<div class="slider_item_direction">
							<div class="style_bg"> <img data-src="{{ Voyager::image($service->image) }}" alt="{{ $service->image_alt }}" title="{{ $service->image_title }}"> </div>
							<div class="slider_list">
								<h2><a href="{{ $service->url }}" class="link">{{ $service->title }}</a></h2>
								<ul>
									{!! $service->description !!}
								</ul>
							</div>
						</div>
				@endforeach
				
			</div>
			<div class="slider-controls navs">
				<button type="button" class="slick-next_develop link"><span class="arrow"><span></span><span></span></span>
				</button>
				<div class="slide-m-dots_develop"></div>
				<button type="button" class="slick-prev_develop link"><span class="arrow"><span></span><span></span></span>
				</button>
			</div>
		</div>
</section>