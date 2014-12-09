
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
{{ HTML::style('css.css') }}
<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>@if($completed=='1'){{{$result->title}}} @else {{{$quizinfo->Name}}} @endif - quizflakes.com</title>
<meta property="og:title" content="@if($completed=='1') {{{$result->title}}}@else {{{$quizinfo->Name}}} @endif" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@if($completed=='1'){{{$result->Text}}} @else {{{$quizinfo->Name}}} @endif" />
    <meta property="og:image" content="{{{$quizinfo->imgurl}}}" />
    <meta property="fb:admins" content="100008043587941" />
    <meta property="og:url" content="quizflakes.com/completed/{{{$quizid}}}" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_gb/sdk.js#xfbml=1&appId=754365534656815&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '754365534656815',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@if($completed=='1')
	<div class="overpop">
		<div class="first"><i class="fa fa-times close"></i>
			<p class="title">{{{$result->title}}}</p>
			<p>{{{$result->Text}}}</p>
			<p> Do you agree with your result? Share your thoughts with us in the comments! </p>
			<a href="https://twitter.com/share" class="twitter-share-button" data-size="large">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<a href="http://www.quizflakes.com/completed/{{{$quizid}}}" class="fbshare"><i class="fa fa-facebook"></i>Share on facebook</a>
		</div>
		<div class="secound"><i class="fa fa-times close"></i>
			<p class="title">LIKE US if you enjoyed this quiz!</p>
			<center>
				<div class="fb-like-box" data-href="http://www.quizflakes.com/" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
			</center>
		</div>
	</div>
@endif
 <div class="topbar">
 	<nav class="navbar navbar-default">
 		<div class="logo"><a href="/">Quizflakes.com</a></div>
 	</nav>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-8">
			<div class="quizprofileconainter">
	   			<div class="quiz-container">

					<center>

						<center>
                        		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- Responsive Quizflake Upper --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5888539100610499" data-ad-slot="4814997360" data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
	</center>
					</center>
	   			    <p>@if($completed=='1'){{{$result->title}}} @else {{{$quizinfo->Name}}} @endif</p>
	   				<img src="{{{$quizinfo->imgurl}}}">
	   				<p>@if($completed=='1'){{{$result->title}}} @else Answer questions to figure out {{{$quizinfo->Name}}}  @endif</p>
	   				<a href="http://95.68.67.131/completed/9" class="fbshare"><i class="fa fa-facebook"></i>Share on facebook</a>
	   						 		</div>
			</div>
			<center><div class="fb-comments" data-href="www.quizflakes.com/completed/{{{$quizid}}}" data-numposts="5" data-colorscheme="light"></div>	</center>

 					<center>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- Responsive Quiz Flakes Lower Ad --> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5888539100610499" data-ad-slot="7768463762" data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
</center>

 		</div>
 		<div class="col-md-4">
 		@foreach($quizzes as $quiz)
 			 			<div class="quiz-container">
			 			 <a href="/quizgo/{{{$quiz->id}}}/1">
                        <img src="{{{$quiz->imgurl}}}">
                        <p>{{{$quiz->name}}}</p>
					</a>
	 			</div>
	 			@endforeach



			 		</div>
 	</div>
 </div>
</body>
<script type="text/javascript">
$(function () {
	$('a.fbshare').on('click',function(event){
		event.preventDefault();
		var url = 'https://www.facebook.com/sharer/sharer.php?u=' + $(this).attr('href');
		var width  = 590,
		    height = 370,
		    left   = (jQuery(window).width()  - width)  / 2,
		    top    = (jQuery(window).height() - height) / 2,
		    url    = url,
		    opts   = 'status=1' +
		             ',width='  + width  +
		             ',height=' + height +
		             ',top='    + top    +
		             ',left='   + left;

		window.open(url, 'share', opts);

	});

if($('.overpop').length){
	$('.overpop .first .close').on('click',function(){
		$('.overpop .first').fadeOut(400,function(){
			$('.overpop .secound').fadeIn();
			$('.overpop .secound').on('click',function(){
				$('.overpop').fadeOut();
			});
		});
	});
}


});
</script>

</html>