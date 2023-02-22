@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3">
            <h3>Add Product</h3>
            {!! Form::open(array('action' => ['ProductController@update', $product->id],'method' => 'PATCH','enctype'=>'multipart/form-data')) !!}
            <div class="form-group">
                {{Form::label('product_name', 'Product Name')}}
                {{Form::text('product_name', $product->product_name, ['class'=>'form-control', 'placeholder'=>'Enter Product Name'])}}
            
            </div>
            
            <div class="form-group">
                {{Form::label('product_price', 'Product price')}}
                {{Form::text('product_price', $product->product_price, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                <label for="sel1">Select Product Category:</label>
                    <select class="form-control" id="sel1" name="category_id">
                    <option selected="selected" value="{{$category->id}}">{{$category->category_name}}</option>    
                        @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option> 
                        @endforeach
                    </select>
            </div>

            <div class="form-group">
                {{Form::label('product_description', 'Product Description')}}
                {{Form::textarea('product_description', $Product->product_description, ['class'=>'form-control'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('product_image', 'Product Image')}}
                {{Form::file('product_image', ['class'=>'form-control btn btn-sm btn-success'])}}
            </div>
            
            <div class="form-group">
                {{Form::submit('update product', ['class'=>'btn btn-sm btn-success'])}}
            </div>
            
            {!! Form::close() !!}
    </div>
</div>



@endsection