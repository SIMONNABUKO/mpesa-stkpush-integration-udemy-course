@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3">
            <h3>Add Product</h3>
            {!! Form::open(array('action' => 'ProductController@store','method' => 'POST','enctype'=>'multipart/form-data')) !!}
<div class="form-group">
{{Form::label('product_name', 'Product Name')}}
{{Form::text('product_name', '', ['class'=>'form-control', 'placeholder'=>'e.g HP Laptop'])}}

</div>

            <div class="form-group">
                {{Form::label('product_price', 'Product price')}}
                {{Form::number('product_price', '', ['class'=>'form-control','placeholder'=>'e.g 500'])}}
            </div>
            <div class="form-group">
                {{Form::label('product_quantity', 'Product Quantity')}}
                {{Form::number('product_quantity', '', ['class'=>'form-control','placeholder'=>'e.g 5'])}}
            </div>
            <div class="form-group">
                {{Form::label('product_location', 'Product Location')}}
                {{Form::text('product_location', '', ['class'=>'form-control','placeholder'=>'e.g Nairobi CBD'])}}
            </div>

            <div class="form-group">
            <input type="hidden" name="user_id" class="form-control" value="{{Auth()->user()->id}}" hidden >
        
            </div>

            <div class="form-group">
                <label for="sel1">Select Product Category:</label>
                    <select class="form-control" id="sel1" name="category_id">
                        @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option> 
                        @endforeach
                    </select>
            </div>

            <div class="form-group">
                {{Form::label('product_description', 'Product Description')}}
                {{Form::textarea('product_description', '', ['class'=>'form-control'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('product_image', 'Product Image')}}
                {{Form::file('product_image', ['class'=>'form-control btn btn-sm btn-success'])}}
            </div>
            
            <div class="form-group">
                {{Form::submit('Add product', ['class'=>'btn btn-sm btn-success'])}}
            </div>
            
            {!! Form::close() !!}
    </div>
</div>



@endsection