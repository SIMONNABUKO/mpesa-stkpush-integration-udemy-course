@extends('layouts.admin')
@section('content')
<h3>Update Category</h3>
{!! Form::open(['action' => ['CategoryController@update', $category->id],'method' => 'PATCH','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('category_name', 'Category Name')}}
    {{Form::text('category_name', $category->category_name, ['class'=>'form-control', 'placeholder'=>'Enter Category Name'])}}

</div>

<div class="form-group">
    {{Form::label('category_description', 'Category Description')}}
    {{Form::textarea('category_description', $category->category_description, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('category_image', 'Category Image')}}
    {{Form::file('category_image', ['class'=>'form-control btn btn-sm btn-success'])}}
</div>

<div class="form-group">
    {{Form::submit('update Category', ['class'=>'btn btn-sm btn-success'])}}
</div>

{!! Form::close() !!}

@endsection
