@extends('main')
@section('title','| Show ')

@section('content')
      

<div class="row">
    {!!  Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT','files'=>true]) !!}
    <div class="col-md-8">
      {{ form::label('title','Title:') }}
        {{ Form::text('title',null,['class'=>'form-control form-group']) }}
        {{ form::label('slug','Slug:') }}
        {{ Form::text('slug',null,['class'=>'form-control form-group']) }}
      
      {{ Form::label('category_id', 'Category:') }}
      {{Form::select('category_id',$categories,null,['class'=>'form-control form-group'])}}

      {{ Form::label('featured_image', 'Update featured image:') }}
      {{Form::file('featured_image',null,['class'=>'form-control form-group'])}}
	 {{ form::label('body','Post Body:') }}
        {{ Form::textarea('body',null,['class'=>'form-control form-group']) }}
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
            <label>Url:</lable>
            <p><a href="{{ url($post->slug) }}">{{ url($post->slug) }} </a></p>
        </dl>
        <dl class="dl-horizontal">
            <label>Created at:</label>
            <p>{{date('M j, Y h:1a',strtotime($post->created_at))}}</p>
        </dl>
        <dl class="dl-horizontal">
            <label>Updated at:</label>
            <p>{{date('M j, Y h:1a',strtotime($post->updated_at))}}</p>
        </dl>
        
        <dl class="dl-horizontal">
            <label>Category:</label>
            <p>{{$post->category->name}}</p>
        </dl>
        <hr>
        <div class="row">
           <div class="col-sm-6">
           {!! Html::linkRoute('posts.index','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}
          
           </div>
           <div class="col-sm-6">
           {{ Form::submit('Save Changes',array('class'=>'btn btn-success btn-block')) }}
           
           </div>
        </div>
      </div>
    </div>
     {!! form::close()   !!}
   </div>
  
@endsection

