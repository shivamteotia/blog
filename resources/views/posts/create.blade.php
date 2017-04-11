@extends('main')
@section('title','| Create')
@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>
        {!! Form::open(array('route' => 'posts.store','data-parsley-validate'=>'','files'=>true)) !!}
            {{ form::label('title','Title:') }}
            {{form::text('title',null,array('class'=>'form-group form-control','required'=>''))}}
             {{ form::label('slug','Slug:') }}
            {{form::text('slug',null,array('class'=>'form-group form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

            {{ Form::label('category_id', 'Category:') }}
				<select class="form-control form-group" name="category_id">
					@foreach($categories as $category)
						<option value='{{ $category->id }}'>{{ $category->name }}</option>
					@endforeach

				</select>
              	{{ Form::label('featured_img', 'Upload a Featured Image') }}
				{{ Form::file('featured_img') }}
  

           
            {{form::label('body','Post Body:')}}
            {{form::textarea('body',null,array('class'=>'form-group form-control','required'=>''))}}
            {{form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
        </div>

    </div>

@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection