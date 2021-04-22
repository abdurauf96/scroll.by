<section class="section section_revies">
	<div class="top_line_description" style="margin-bottom: 110px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="wrap_t">
						<div class="top_line_description wow fadeInUp">
							<h2 class="top_ttle">Отзывы наших клиентов</h2> </div>
						<div class="icon-category">
							<a class="learn-more" href="/reviews">
								<div class="circle-red"> <span class="icon">
                     <img src="/img/icon/reviews-icon.png" alt="">
                   </span> </div>
								<p class="button-text">Все отзывы</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="reviews_main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 offset-md-2" style="background-color: #f4f6fa">
					<div class="slider_reviews navs">
						@foreach ($reviews as $review)
						<div class="reviews_item">
							<div class="row">
								<div class="col-lg-12 col-xl-3">
									<div class="photo_rev" style="background-image:url({{ Voyager::image($review->logo) }})"></div>
									<div class="made_rev"> <img data-src="/" class="img-fluid" alt=""> </div>
								</div>
								<div class="col-lg-12 col-xl-9 dercription_wrap">
									<div class="description_rev"> <strong>{{ $review->title }}</strong>
										<br>
										<br> {!! $review->body !!} </div>
									<div class="row animate" style="margin-top:65px;">
										<div class="col-sm-12 col-md-9">
											<div class="person_info_rev">
												<p></p> <span></span> </div>
										</div>
										<div class="col-sm-12 col-md-3">
											<div class="downloan_file rounded-circle">
												<a href="{{ Voyager::image($review->image) }}" target="_blank" class="link"> <i class="fal fa-file-pdf"></i> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="slider-controls navs">
						<button type="button" class="slick-next_reviews link"><span class="arrow"><span></span><span></span></span>
						</button>
						<div class="slide-m-dots_reviews"></div>
						<button type="button" class="slick-prev_reviews link"><span class="arrow"><span></span><span></span></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>