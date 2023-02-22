@extends('layouts.app')
@section('title', '|Products List Page')

@section('description', 'Sir-erics- The list of the products onsale on our site')

@section('content')
        <!-- Portfolio Projects -->
		<div class="container marginbot50">
            <p class="h3">Product Details</p>
				<div class="row">
					<div class="col-lg-3">
                        
                        <img class="card-img-top" src="{{asset('storage/images/product_images/'.$product->product_image)}}" alt="">
                      
                    </div>
                    <div class="col-lg-9">
                        <h4 class="heading">{{$product->product_name}}</h4>
                              <h5 class="card-title">{{$product->product_price}}</h5>
                              <p class="card-text">{{$product->product_description}}</p>
                            <a href="{{url('cart/show', $product->id)}}" class="btn btn-primary">Add to cart</a>
                    </div>
				</div>
			</div>
			<script>
			$(document).ready(function(){
				alert('jQuery is working here!');
			  });
			</script>
            @endsection