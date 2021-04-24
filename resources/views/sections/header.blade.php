<div class="header-section_wrap">
	<div class="header_top_menu_bg"></div>
	<div class="header_top_menu_bg_transparent"></div>
	<div class="header_top_menu {{ Route::currentRouteName()!='main' ? 'inner' : '' }}">
		<div class="{{ Route::currentRouteName()!='main' ? 'logo_inner' : 'logo' }}">
			<a href="/"></a>
		</div>
		<nav class="header_menu hidden-md">
        {{ menu('main','layouts.menu') }}
    </nav>
          <div class="header_phone link">
        <a href="tel:+375 44 588-77-11 ">
          <i class="fas fa-mobile-alt"></i>
              +375 44 588-77-11 
        </a> </div>
	<div class="mobile_mnu clearfix">
		<div id="nav-icon3" class="link"> <span></span> <span></span> <span></span> <span></span> </div>
	</div>
</div>
<div class="header_mobile_section">
	<div class="logo link">
		<a href="" class="link"><img src="/img/logo_white.png" alt=""></a>
	</div>
	<div class="mobile_mnu clearfix">
		<div id="nav-icon3" class="link"> <span></span> <span></span> <span></span> <span></span> </div>
	</div>
</div>
<div class="mobile_mnu_list">
	<div class="menu_list">
		<div class="container">
			<div class="row block-menu">
				<div class="col-sm-12 col-md-6 col-lg-3 category_list">
					<h2><a href="/#" class="disable"> Агентство</a></h2>
					<ul>
						<li><a href="/agency" class="link">Об агентстве</a ></li >

                      <li><a href = "/reviews" class="link" >Отзывы</a ></li >

                      <li><a href = "/vacancy" class="link" >Вакансии</a ></li >

                      <li class="blog"><a href = "/blog" class="link" >Блог</a ></li >
                  </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 category_list">
                      <h2><a href="/services" class="disable"> Услуги</a></h2>
					<ul>
						@foreach ($services as $service)
						<li><a href="{{ $service->url }}" class="link">{{ $service->title }}</a ></li>
						@endforeach
						
                      </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 category_list">
                  <h2><a href="/portfolio" class="disable"> Портфолио</a></h2>
					<ul>
						@foreach ($portfolio_categories as $cat)
						<li><a href="{{ route('portfolio', $cat->slug) }}" class="link">{{ $cat->title }}</a ></li >
						@endforeach
                  	</ul>
                </div>
                <div class="col-sm-12 col-md-3 category_list two">
                  <h2><a href="/contact">Контакты</a></h2>
											<div class="block_contacts_wrapper">
												<p class="numb_font"> <a href="tel:+{{ $link->phone }} ">
                        {{ $link->phone }} 
                      </a> </p>
												<p>{{ $link->email }}</p>
												<p> {!! $link->addres !!}</p> <span>Мы в мессенджерах</span>
												<div class="block_contacts_icon"> <a href="viber://chat?number={{ $link->whatsapp }}" target='_blank' class="v_soc"><i class="fab fa-viber"></i></a> 
													<a href="skype:scrollby?chat" target='_blank' class="s_soc"><i class="fab fa-skype"></i></a> <a href="https://telegram.me/{{ $link->telegram }}" target='_blank' class="t_soc"><i class="fab fa-telegram-plane"></i></a> <a href="whatsapp://send?phone={{ $link->whatsapp }}" target='_blank' class="w_soc"><i class="fab fa-whatsapp"></i></a> </div>
											</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="category_list_bottom text-center">
						<!-- <a class="btn-circle btn-style-red" href="#">Скачать презентацию<span></span></a> -->
						<div class="social_link">
							<div class="col text-center">
								<ul>
									<li><a href="{{ $link->facebook }}">facebook</a></li>
									<li><a href="{{ $link->instagram }}">instagram</a></li>
									<li><a href="{{ $link->vkontakte }}">vkontakte</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> @if (Route::currentRouteName()=='main') @include('sections.carusel') @endif </div>