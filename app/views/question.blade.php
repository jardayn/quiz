
<!DOCTYPE html>
<html>
<head>
	<title>Quizflakes.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
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
 	<div>{{ HTML::image('logo.png') }}</div>

 	</nav>
 </div>
 <div class="container">
	<center>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- Responsive Quizflake Upper --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5888539100610499" data-ad-slot="4814997360" data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
	</center>
	<div class="quizcontainer">
		 <p class="quiztitle">{{{$quiztitle->Name}}}</p>
		 <p class="quiznumber">Question {{{$questid}}} out of {{{$questnumb}}}</p>
		 <p class="actualquestion">{{{$question->Text}}}</p>
		 		 <div class="btn-group-vertical btn-group btn-group-lg">

		<br>
		{{ Form::open(['route'=>'quizansw.store','class'=>'form-horizontal', 'role'=>'form', 'id'=>'quizform']) }}
		<input type="hidden" value="{{{$quizid}}}" name="quizid">
		<input type="hidden" value="{{{$questid}}}" name="questid">
		@foreach($answers as $answer)
		<p></p>
		<button type='submit' value="{{{$answer->result_value}}}" name="answerresult" class="btn btn-default">{{{$answer->text}}}</button>

        		@endforeach
		 	 </div>
		</form>

	</div>

	<center>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- Responsive Quiz Flakes Lower Ad --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5888539100610499" data-ad-slot="7768463762" data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
	</center>
 </div>
</body>
</html>