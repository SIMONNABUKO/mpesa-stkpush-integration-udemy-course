@extends('layouts.app')
@section('content')<br>
<div class="row">
    <div class="col-lg-3">
    <img src="{{asset('storage/images/category_images/'.$category->category_image)}}" alt="">
    </div>
    <div class="col-lg-9">
        <div class="col-lg-12 ">
            <div class="card">
            <h5 class="card-header">{{$category->category_name}}</h5>
                <div class="card-body">
                    <h5 class="card-title">About This Category</h5>
                <p class="card-text">{{$category->category_description}}</p>
                    <a href="/admin/routes" class="btn btn-primary">Go Back</a>
                </div>

        </div>
             
        </div>
    </div>

</div>
<h3 class="text-center">Products in this category:</h3><br><br>
<div class="row">
    @if(count($products)>0)
            @foreach ($products as $product)
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                 {{$product->product_name}}
                </div>
                <img class="card-img-top" src="{{asset('storage/images/product_images/'.$product->product_image)}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">KSHs {{$product->product_price}}</h4>
                    <p class="card-text">{{$product->product_description}}</p>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>    
        </div>
            @endforeach
        @endif
</div>
    
    


      
@endsection