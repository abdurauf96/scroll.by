<section class="section section-news">
	<div class="top_line_description" style="margin-bottom: 110px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="wrap_t">
						<div class="top_line_description wow fadeInUp">
							<h2 class="top_ttle">Блог</h2> </div>
						<div class="icon-category icon-long">
							<a class="learn-more" href="/blog">
								<div class="circle-red"> <span class="icon">
                     <img src="/img/icon/blog-icon.png" alt="">
                   </span> </div>
								<p class="button-text">Все статьи Блога</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="news_main">.
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="slider_news navs">
            @foreach ($blogs as $blog)
            <div class="slider_news_item">
							<a href="{{ route('blogDetail', $blog->slug) }}">
								<div class="block_photo" style="background-image: url({{ Voyager::image($blog->image) }})">
									<div class="overlay" style="top: 307px; left: 693.5px;"></div>
									<div class="block_tags"> <span>{{ $blog->created_at->format('d.m.y') }}</span> <span>{{ $blog->category=='deal'? 'Акция' : 'Блог' }}</span> </div>
								</div>
								<div class="news_title">
									<h3>{{ $blog->title }}</h3> </div>
							</a>
						</div>
            @endforeach
						
					</div>
					<div class="slider-controls navs">
						<button type="button" class="slick-next_news link"><span class="arrow"><span></span><span></span></span>
						</button>
						<div class="slide-m-dots_news"></div>
						<button type="button" class="slick-prev_news link"><span class="arrow"><span></span><span></span></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>