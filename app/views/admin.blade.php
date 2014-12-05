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
 	<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>{{ HTML::link('/admin', 'Admin Panel')}}</li>
         @if(isset($questid))<li>{{ HTML::link("/admin/quest/$questid", 'Admin Panel')}}</li>@endif

          </ul>

        </div>
      </div>
    </nav>
 </div>
 <div class="container">
 	<div class="row">
<div class="col-md-8">

<center><h1>Create a quiz</h1></center>
{{ Form::open(['route'=>'quiz.store','class'=>'form-horizontal', 'role'=>'form', 'id'=>'quizform']) }}
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Quiz Name</label>
  <div class="col-md-6">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imgurl">Quiz img URL</label>
  <div class="col-md-6">
  <input id="imgurl" name="imgurl" type="text" placeholder="imgurl" class="form-control input-md">
  </div>
</div>
<!-- Text input-->

  <center><input type="submit" value="Submit"></center>
</fieldset>
</form>




 </div>
 </div>


 <div class="row">
 <div class="col-md-8">
<center><h1>Existing Quizzes</h1></center>
<table class="table table-striped table-bordered table-hover"
                                                       id="runTable">
                                                    <thead>
                                                    <tr>

                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Picture</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($quizzes as $quiz)
                                                    <tr class="odd gradeX">

                                                        <td>{{{$quiz->id}}}</td>
                                                        <td>{{{$quiz->name}}}</td>
                                                        <td><a href="{{{$quiz->imgurl}}}">Link to the picture</a></td>
                                                        <td> <a href="/quiz/public/admin/quiz/{{{$quiz->id}}}" class="btn btn-primary">Edit</a></td>
                                                        <td> <a href="{{URL::route('delete_stuff', ['quizzes',$quiz->id]);}}" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
 </div>
 </div>
 </div>
</body>
</html>
