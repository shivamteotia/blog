<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
      <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel blog </title>

    <!-- Bootstrap -->
        {{ Html::style('css/style.css') }}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <body>
    <div class="container">
        <nav class="navbar navbar-default header" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Rambling The <i class="fa fa-globe " ></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="/">Home</a></li>
        <li class=""><a href="/blog">Blog</a></li>
        <li class=""><a href="/about">About</a></li>
        <li class=""><a href="/contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Posts</a></li>
            <li><a href="">Categories</a></li>
            <li><a href="">Tags</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="">Logout</a></li>
          </ul>
        </li>
        
        

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <div class="row">
            <div class="col-md-12">
            <h2>Contact Me</h2>
            <hr>

        {!! Form::open(array('url' => 'contact','data-parsley-validate'=>'','method'=>'POST')) !!}
            {{ form::label('email','Email:') }}
            {{form::text('email',null,array('class'=>'form-group form-control','required'=>'','email'=>''))}}
            {{ form::label('subject','Subject:') }}
            {{form::text('subject',null,array('class'=>'form-group form-control','required'=>''))}}
            {{form::label('message','Message:')}}
            {{form::textarea('message',null,array('class'=>'form-group form-control','required'=>''))}}
            {{form::submit('Send Message',array('class'=>'btn btn-success','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}

            </div>
        </div>
  </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
    </body>
</html>
