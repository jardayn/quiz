
<!DOCTYPE html>
<html>
<head>
	<title>Quizflakes.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
{{ HTML::style('css.css') }}
<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<meta property="og:title" content="Quizflakes.com" />
<meta property="og:type" content="website" />
<meta property="og:description" content="We provide you with the best quizzes available!" />
<meta property="fb:admins" content="1420305141592703"/>
</head>
<body>
 <div class="topbar">
 	<nav class="navbar navbar-default">
 		{{ HTML::image('logo.png') }}
 	</nav>
 </div>
 <div class="container">
 	<div class="row">
	 		@foreach($quizzes as $quiz)
                <div class="col-md-4 col-xs-6">
                    <div class="quiz-container">
                        <a href="/quizgo/{{{$quiz->id}}}/1">
                            <img src="{{{$quiz->imgurl}}}">
                            <p>{{{$quiz->name}}}</p>
                        </a>
                    </div>
                </div>
            @endforeach
	 	</div>
 </div>
</body>

</html>



