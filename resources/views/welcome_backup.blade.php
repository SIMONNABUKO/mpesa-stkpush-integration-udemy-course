

@extends('layouts.app')
@section('title', '|Welcome page')

@section('description', 'The newest and most popular online shopping website in Kenya')

@section('content')


		<!-- start header -->
		{{-- Navbar was here but was include in  includes/head.blade.php --}}
		<!-- end header -->
		<section id="featured" class="bg">
				{{-- 	Slider included here from includes/slider.blade.php --}}
				<!-- start slider -->
				@include('includes/slider')
				<!-- start slider -->
			<section class="callaction">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="cta-text">
								<h2>Awesome site template <span>corporate</span> business</h2>
								<p> Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="cta-btn">
								<a href="#" class="btn btn-theme btn-lg">Grab it now <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
	
			</section>
	
	
	
	
	

<section id="content">

		<!-- Portfolio Projects -->
		<div class="container marginbot50">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="heading">Recent Works</h4>
	
						<div id="filters-container" class="cbp-l-filters-button">
							<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
								<div class="cbp-filter-counter"></div>
							</div>
							<div data-filter=".identity" class="cbp-filter-item">Identity
								<div class="cbp-filter-counter"></div>
							</div>
							<div data-filter=".web-design" class="cbp-filter-item">Web Design
								<div class="cbp-filter-counter"></div>
							</div>
							<div data-filter=".graphic" class="cbp-filter-item">Graphic
								<div class="cbp-filter-counter"></div>
							</div>
							<div data-filter=".logo" class="cbp-filter-item">Logo
								<div class="cbp-filter-counter"></div>
							</div>
						</div>
	
	
						<div id="grid-container" class="cbp-l-grid-projects">
							<ul>
								<li class="cbp-item graphic">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/1.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="/img/works/1big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">Dashboard</div>
									<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
								</li>
								<li class="cbp-item web-design logo">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/2.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="/img/works/2big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">World Clock Widget</div>
									<div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
								</li>
								<li class="cbp-item graphic logo">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/3.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
	
													<a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
									<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
								</li>
								<li class="cbp-item web-design graphic">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/4.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
	
													<a href="/img/works/4big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">Events and More</div>
									<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
								</li>
								<li class="cbp-item identity web-design">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/5.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
	
													<a href="/img/works/5big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">WhereTO App</div>
									<div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
								</li>
								<li class="cbp-item identity web-design">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/6.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
	
													<a href="/img/works/6big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">Ski * Buddy</div>
									<div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
								</li>
								<li class="cbp-item graphic logo">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/7.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
	
													<a href="/img/works/7big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
									<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
								</li>
								<li class="cbp-item graphic logo">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="/img/works/8.jpg" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
	
													<a href="/img/works/8big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
									<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
								</li>
							</ul>
						</div>
	
						<div class="cbp-l-loadMore-button">
							<a href="/ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
						</div>
	
					</div>
				</div>
			</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-center">
								<h2>We use <span class="highlight">modern</span> infrastructure & technology</h2>
								<p>Lorem ipsum dolor sit amet, ne duis posse mei, ut cum vero nominati. Sed graece aeterno consectetuer te. Cu duo tota deleniti, vis ea fuisset nostrum. Meliore inciderint qui ne. Suas cotidieque vel ut ei eros perpetua qui. Ponderum lobortis reformidans</p>
							</div>
						</div>
					</div>
				</div>
	
	{{-- Features section was here but removed for code organization --}}
	
				<!-- divider -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="solidline">
							</div>
						</div>
					</div>
				</div>
				<!-- end divider -->
				<!--about section was here-->
	
	
	
				<!-- about section ended here-->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="blankline">
							</div>
						</div>
					</div>
				</div>
				<!-- end divider -->
	
				<!-- parallax began here -->
				{{-- The parallax code was removed for theme re-organization --}}
				<!-- parallax ended here -->
	
	
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<h4>Testimonials</h4>
									<div class="testimonialslide clearfix flexslider">
										<ul class="slides">
											<li>
												<blockquote>
													Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
												</blockquote>
												<h4>Daniel Dan <span>&#8213; MA System</span></h4>
											</li>
											<li>
												<blockquote>
													Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
												</blockquote>
												<h4>Mark Wellbeck <span>&#8213; AC Software </span></h4>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> One</a></li>
										<li><a href="#two" data-toggle="tab">Two</a></li>
										<li><a href="#three" data-toggle="tab">Three</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="one">
											<p><img src="/img/dummy1.jpg" class="pull-left" alt="" />
												<strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
											</p>
											<p>
												No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
											</p>
										</div>
										<div class="tab-pane" id="two">
											<p><img src="/img/dummy1.jpg" class="pull-right" alt="" /> Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit
												et.
											</p>
											<p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu.</p>
										</div>
										<div class="tab-pane" id="three">
											<p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu. </p>
											<p>
												Cu cum commodo regione definiebas. Cum ea eros laboramus, audire deseruisse his at, munere aeterno ut quo. Et ius doming causae philosophia, vitae bonorum intellegat usu cu.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<!-- divider -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="solidline">
							</div>
						</div>
					</div>
				</div>
				<!-- end divider -->
	
	
	
	
				<!-- divider -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="solidline">
							</div>
						</div>
					</div>
				</div>
				<!-- end divider -->
	
				<!-- clients -->
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-md-2 aligncenter client">
							<img alt="logo" src="i/mg/clients/logo1.png" class="img-responsive" />
						</div>
	
						<div class="col-xs-6 col-md-2 aligncenter client">
							<img alt="logo" src="/img/clients/logo2.png" class="img-responsive" />
						</div>
	
						<div class="col-xs-6 col-md-2 aligncenter client">
							<img alt="logo" src="/img/clients/logo3.png" class="img-responsive" />
						</div>
	
						<div class="col-xs-6 col-md-2 aligncenter client">
							<img alt="logo" src="/img/clients/logo4.png" class="img-responsive" />
						</div>
	
						<div class="col-xs-6 col-md-2 aligncenter client">
							<img alt="logo" src="/img/clients/logo5.png" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-md-2 aligncenter client">
							<img alt="logo" src="/img/clients/logo6.png" class="img-responsive" />
						</div>
	
					</div>
				</div>
	
			</section>


@stop

















{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
