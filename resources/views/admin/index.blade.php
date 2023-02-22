@extends('layouts.admin')
@section('content')
<div class="row">
        @if(count($categories)>0)

        @foreach ($categories as $category)

     <div class="col-lg-4">
        <a href="/admin/category/show/{{$category->id}}">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('storage/images/category_images/'.$category->category_image)}}" 
        alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                {{$category->category_name}}
                </h5>
                <p class="card-text">{{Str::limit($category->category_description, 20)}}</p>
                {{-- Products in the category badge --}}
                <button type="button" class="btn btn-default btn-sm btn-block">
                Products <span class="badge badge-light">{{$category->products->count()}}</span>
                </button><br>
                <div class="btn-group">
                    {{-- Edit Button --}}
                <a style="color:white;" href="/admin/category/edit/{{$category->id}}">
                <button class="btn btn-success btn-sm"><span><i style="color:white;" class="fa fa-edit"></i> Edit</span></button></a>
                    {{-- Delete Button --}}
    {!!Form::open(['action'=>['CategoryController@destroy', $category->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
	{{Form::hidden('_method', 'DELETE')}}
	{{Form::submit('Delete',  ['class'=>'btn btn-sm btn-danger'])}}
	{!!Form::close()!!}
                    </div>
                    

                    
            </div>
        </a>
        </div><hr>
    </div>
    @endforeach
    

@endif
{{$categories->links()}}
</div>

      
@endsection