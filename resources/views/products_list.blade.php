@extends('layouts.app')
@section('title', '|Products List Page')

@section('description', 'Sir-erics- The list of the products onsale on our site')

@section('content')
        <!-- Portfolio Projects -->
		<div class="container marginbot50">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="heading">All products List</h4>
	
						<div id="filters-container" class="cbp-l-filters-button">
							<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
								<div class="cbp-filter-counter"></div>
							</div>
							@if(!empty($categories))
							@forelse ($categories as $category)
							<div data-filter=".identity" class="cbp-filter-item">{{$category->category_name}}
								<div class="cbp-filter-counter"></div>
						</div>
							@empty
								<h5>No categories were found</h5>
							@endforelse
							@endif
						
							

						</div>
	
	
						<div id="grid-container" class="cbp-l-grid-projects">
							<ul>
								@if(count($products)>0)
								@foreach ($products as $product)
									
								
								<li class="cbp-item graphic col-sm-6 col-xs-12">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="{{asset('storage/images/product_images/'.$product->product_image)}}" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="/add-to-cart/{{$product->id}}" class="btn btn-success" >Add to cart</a>
												</div>
											</div>
										</div>
									</div>
								<div class="cbp-l-grid-projects-title">{{$product->product_name}}</div>
								
								<div class="cbp-l-grid-projects-desc"><div  class="h5">KSh.{{$product->product_price}}</div></div>
								<div class="cbp-l-grid-projects-desc">{{$product->product_description}}</div>
								</li>
								@endforeach
								@endif

							</ul>
						</div>
	
						{{$products->links()}}
	
					</div>
				</div>
			</div>
			<script>
			$(document).ready(function(){
				alert('jQuery is working here!');
			  });
			</script>
            @endsection