

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

			<section class="callaction">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="cta-text">
								<h2>Have a product to sell? Reach<span>Thousands</span> of our daily visitors</h2>
								<p class="h4">Our site is among the most visited sites in Kenya due to the highest 
									level of proffessionalism
									we operate under. You can easily sell our product 
									to thousands of people visiting 
									our site on a daily basis.
									</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="cta-btn">
								<a href="#" class="btn btn-theme btn-lg">Start selling <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
	
			</section>

<section id="content">

		<!-- Portfolio Projects -->
		<div class="container marginbot50">
				<div class="row">
					{{-- Categories Division --}}
					<div class="col-lg-12 desktop-only" >
							<div style="background-color:#131d4c; color:white" class="col-lg-12">
									<p style="color:white" class="h5  text-center">Featured Categories</p>
							</div>
		
							<div id="filters-container" class="cbp-l-filters-button">
								<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
									<div class="cbp-filter-counter"></div>
								</div>
								@foreach ($categories as $category)
								<div data-filter=".identity" class="cbp-filter-item">{{$category->category_name}}
										<div class="cbp-filter-counter"></div>
									</div>	
								@endforeach
								
	
							</div>
							
		
							<div id="" class="row">
								<ul>
									
									
									<div id="owl-demo" class="owl-carousel ">
											@if(count($categories)>0)
											@foreach ($categories as $category)
										<div class="item">
										<div class="card">
											<div class="card-header">
												{{$category->category_name}}
											</div>
											<img class="card-img-top" src="{{asset('storage/images/category_images/'.$category->category_image)}}" alt="">
											<div class="card-body">
											  <h5 class="card-title">{{$category->products->count()}}</h5>
											  <p class="card-text">{{Str::limit($category->category_description,'20')}}</p>
											<a href="{{url('/category/products', $category->id)}}" class="btn btn-default" >View details</a>
											</div>
										  </div>
										</div>
									
									@endforeach
									@endif
								</div>
	
								</ul>
							</div>
							<br>
							
									
							<hr>
						</div>
						
					{{-- End of Categories Division --}}
					<div class="col-lg-12">
						<div class="container">
								<h5 class="heading">Featured Products</h4>
						</div>
						
	
						<div id="filters-container" class="cbp-l-filters-button">
							<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
								<div class="cbp-filter-counter"></div>
							</div>
							@foreach ($categories as $category)
							<div data-filter=".identity" class="cbp-filter-item">{{$category->category_name}}
									<div class="cbp-filter-counter"></div>
								</div>	
							@endforeach
							

						</div>
	
	
						<div id="" class="row">
							<ul>
								@if(count($featured_products)>0)
								@foreach ($featured_products as $featured)
								
								<div class=" col-sm-6 col-xs-12 clear-fix">

									<div class="card">
										<div class="card-header">
											{{$featured->product_name}}
										</div>
										<img class="card-img-top" src="{{asset('storage/images/product_images/'.$featured->product_image)}}" alt="">
										<div class="card-body">
										  <h5 class="card-title">{{$featured->product_price}}</h5>
										  <p class="card-text">{{$featured->product_description}}</p>
										<a href="{{url('cart/show', $featured->id)}}" class="btn btn-success">Add to cart</a>
										<a href="{{url('admin/product/show', $featured->id)}}" class="btn btn-default" >View details</a>
										</div>
									  </div>
								</div>
								@endforeach
								@endif

							</ul>
						</div>
						<br>
						<div class="cbp-l-loadMore-button">
							<a href="/admin/product/index" class="btn">See All Products</a>
						</div>
	<hr>
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
								<h4 class="text-center">How it works</h4>
								<div class="col-sm-6 col-lg-6">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i>Step One</a></li>
										<li><a href="#two" data-toggle="tab">Step Two</a></li>
										<li><a href="#three" data-toggle="tab">Step Three</a></li>
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
				
			</section>


@stop
