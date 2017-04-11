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
         {{ Html::style('fonts/font.css') }}
       
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
<hr>
    <div class="col-md-8 horizontal">
    <h4 class="text-center"> NATURE</h4>
    <h2 class="text-center">A LIGHT TOUR OF GUJRAT</h2>
    <h5 class="text-center">SEPTEMBER 16,2017 <span class="comment">NO COMMENTS</h5>
    <div class="postPic"><img src="images/post.JPG" width="650px" height="400px"  class="img-square img-responsive"/></div>
    <p class="postText">Every city in Rajasthan makes a tourist want to camp for at least three days, and explore its forts, havelis, lakes, shopping districts and nearby getaways in luxury. But if you’ve got a week off from work, and want to sample every part of the state, the good news is you can do it in a single, exhausting but delightful, week. Day 1: Arrive at Jaipur There’s a lot to see in the Pink City – so called because its old districts were painted pink to welcome Prince Albert in 1876 – and most tourist attractions close their gates by early evening, so it’s important to reach the capital as early as you can. The spacious, well-ventilated airport has the soothing atmosphere of a resort, and the soft, Hindustani classical music playing on the speakers is a welcome change from the hoarse yells and frequent announcements of busier airports. Fortunately for tourists, some of the city’s key monuments – the Hawa Mahal, City Palace, Jantar Mantar and Govinddevji Ka Mandir – are located within walking distance of each other.

</p>
<div >
<span class="fa-stack fa-lg">
 
  <i class="fa fa-facebook fa-stack"></i>
</span>
<span class="fa-stack fa-lg">
 
  <i class="fa fa-instagram fa-stack"></i>
</span>
<span class="fa-stack fa">
 
  <i class="fa fa-twitter fa-stack"></i>
</span>
<span class="fa-stack fa">
 
  <i class="fa fa-linkedin fa-stack"></i>
</span>
<span class="readMore">CONTINUE READING</span>

<hr>
</div>

    </div>
    <div class="col-md-3 col-md-offset-1">
    <div class="sidebar sidebar-right">
      <div class="aboutMe">ABOUT ME</div>
      <div ><img src="images/myPic.jpg" width="170px" height="150px"  class="myPic img-responsive"/></div>
      <p class="myBio">“Today I am in control because I want to be. I have my fingers on the switch, but have lived a lifetime ignoring the control I have over my own world. Today is different.” </p>
        <hr>
        <div class="socialMe">SOCIAL ME</div>
        <div class="socialIcon">
        <span class="fa-stack fa">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x"></i>
</span>
        <span class="fa-stack fa">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
</span>
        <span class="fa-stack fa">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-instagram fa-stack-1x"></i>
</span>
        <span class="fa-stack fa">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-linkedin fa-stack-1x"></i>
</span>
        </div>
        <hr>
        <div class="socialMe">OTHER POSTS</div>
        
        <hr>
        <div class="socialMe">CATEGORIES</div>
    </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
    </body>
</html>
