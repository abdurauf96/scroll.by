@extends('layouts.app')

@section('content')
<div class="eror wrapper">
    @include('sections.header')

    <div class="background description_page">
		<h2>404</h2>
		<p>Cтраница не найдена</p> <a href="/" class="btn-circle white btn-red">На главную<span></span></a>
		<div class="link-section-site"> <a href="/services">Услуги</a> <a href="/portfolio">Портфолио</a> <a href="/blog">Блог</a> </div>
	</div>
	<ul id="scene" class="scene">
		<li class="layer">
			<div class="background depth-0" style="background-image:url('img/paralax/main_bg.jpg')"></div>
		</li>
		<li class="layer" data-depth="0.20">
			<div class="background cloud" style="background-image:url('img/paralax/cloud-small-2.png')"></div>
		</li>
		<li class="layer" data-depth="0.45">
			<div class="background cloud-small cloud-2" style="background-image:url('img/paralax/cloud-small-2.png')"></div>
		</li>
		<li class="layer" data-depth="0.65">
			<div class="background cloud-small cloud-3" style="background-image:url('img/paralax/cloud-small-3.png')"></div>
		</li>
		<li class="layer" data-depth="0.20">
			<div class="background cloud-small cloud-4" style="background-image:url('img/paralax/cloud-small-3.png')"></div>
		</li>
		<li class="layer" data-depth="0.30">
			<div class="background cloud-small cloud-5" style="background-image:url('img/paralax/cloud-small-3.png')"></div>
		</li>
		<li class="layer" data-depth="0.30">
			<div class="background main-bg-white-bottom" style="background-image:url('img/paralax/main-bg-white-bottom.png')"></div>
		</li>
		<li class="layer" data-depth="0.10">
			<div class="background bush-big" style="background-image:url('img/paralax/bush-big-left.png')"></div>
		</li>
		<li class="layer" data-depth="0.25">
			<div class="background bush-small" style="background-image:url('img/paralax/bush-1.png')"></div>
		</li>
		<li class="layer" data-depth="0.50">
			<div class="background bush-big right" style="background-image:url('img/paralax/bush-big-right.png')"></div>
		</li>
		<li class="layer" data-depth="0.35">
			<div class="background bush-small right" style="background-image:url('img/paralax/bush-2.png')"></div>
		</li>
		<li class="layer" data-depth="0.30">
			<div class="background isle" style="background-image:url('img/paralax/layer-2.png')"></div>
		</li>
		<li class="layer" data-depth="0.20">
			<div class="background girl" style="background-image:url('img/paralax/layer-3.png')"></div>
		</li>
	</ul>

</div>

@endsection
@section('js')
<script src="/js/TweenMax.min.js"></script>
<!-- <script src="/js/cursor.js"></script> -->
<script src="/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
@endsection