@extends('layouts.admin')
@section('content')
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
        
    


      
@endsection