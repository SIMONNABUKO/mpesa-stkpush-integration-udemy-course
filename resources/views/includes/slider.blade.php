<div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="card" style="">
                    <div class="card-header">
                      Featured Categories
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                        <a href="{{url('/category/products', $category->id)}}">
                    <li class="list-group-item"> <span></span><i class="fa fa-angle-right"></i>
                        {{Str::limit($category->category_name,'10')}}<div class="badge">{{$category->products->count()}}</div>&nbsp;&nbsp;&nbsp;&nbsp;</li>     
                    </a>
                        @endforeach
                      
    
                    </ul>
                  </div>
            </div>
            <div class="col-lg-8">
                <!-- Slider -->
                <div id="main-slider" class="main-slider flexslider">
                    <ul class="slides">
                        <li>
                            <img  src="/img/slides/flexslider/1.png" alt="" />
                            <div class="flex-caption">
                                <h3>Product Categories</h3>
                                <p> We have hundreds of categories you can choose from.So what are you waiting for?</p>
                                <a href="#" class="btn btn-theme">Browse Categories</a>
                            </div>
                        </li>
                        <li>
                            <img src="/img/slides/flexslider/2.png" alt="" />
                            <div class="flex-caption">
                                <h3>Buy from anywhere</h3>
                                <p> But at the comfort of your house. We will deliver at your door-step.</p>
                                <a href="#" class="btn btn-theme">Browse Products</a>
                            </div>
                        </li>
                        <li>
                            <img src="/img/slides/flexslider/3.png" alt="" />
                            <div class="flex-caption">
                                <h3>Want to be a vendor?</h3>
                                <p>If you have products you can't upload and relax as they sell</p>
                                <a href="#" class="btn btn-theme">Start Selling</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end slider -->
            </div>
            <div class="col-lg-2">

                    <div class="card" style="">
                            <div class="card-header">
                                    Latest Product
                                  </div>
                            @if($featured_product)
                    <img class="card-img-top img img-thumbnail img-responsive" src="{{asset('storage/images/product_images/'.$featured_product->product_image)}}" alt="Card image cap">
                            <div class="card-body">
                                
                              <h5 class="card-title">{{$featured_product->product_name}}</h5>
                            <p class="card-text">{{$featured_product->product_description}}</p>
                            <div>  <p class="badge">KSHs {{$featured_product->product_price}}</p></div>
                              <a href="#" class="btn btn-success">View Details</a>
                              @endif
                            </div>
                          </div>
                
                </div>
        </div>
    </div>


</section>