@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3">
            <h3>Add Category</h3>
            {!! Form::open(array('action' => 'CategoryController@store','method' => 'POST','enctype'=>'multipart/form-data')) !!}
            <div class="form-group">
                {{Form::label('category_name', 'Category Name')}}
                {{Form::text('category_name', '', ['class'=>'form-control', 'placeholder'=>'Enter Category Name'])}}
            
            </div>
            
            <div class="form-group">
                {{Form::label('category_description', 'Category Description')}}
                {{Form::textarea('category_description', '', ['class'=>'form-control'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('category_image', 'Category Image')}}
                {{Form::file('category_image', ['class'=>'form-control btn btn-sm btn-success'])}}
            </div>
            
            <div class="form-group">
                {{Form::submit('Add Category', ['class'=>'btn btn-sm btn-success'])}}
            </div>
            
            {!! Form::close() !!}
    </div>
</div>



@endsection