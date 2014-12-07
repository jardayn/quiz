<!DOCTYPE html>
<html>
<head>
	<title>Quizflakes.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
{{ HTML::style('css.css') }}
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<meta property="og:title" content="Quizflakes.com" />
<meta property="og:type" content="website" />
</head>
<body>
<style>
.centerthis {
margin: 0 auto;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-1 centerthis">
        <center><h1>Lets do this</h1></center>
        {{ Form::open(['route'=>'sessions.store','class'=>'form', 'role'=>'form', 'id'=>'login_form']) }}
            <div class="form-group">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username',null,['class'=>'form-control ','placeholder'=>'Username']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password']) }}
            </div>
            <button type="submit" id="submit" class="btn btn-default">Submit</button>
            {{ Form::close() }}
        </div>
    </div>
</div>

</body>
</html>


