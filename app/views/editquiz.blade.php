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

          </ul>

        </div>
      </div>
    </nav>
 </div>
 <div class="container">
 	<div class="row">
<div class="col-md-12">

<center><h1>Add a question to this quiz!</h1></center>
{{ Form::open(['route'=>'quest.store','class'=>'form-horizontal', 'role'=>'form', 'id'=>'quizform']) }}
<fieldset>


<input type="hidden" value="{{{$quizid}}}" name="quizid">
<div class="form-group">
  <label class="col-md-4 control-label" for="question">Question</label>
  <div class="col-md-6">
  <input id="question" name="question" type="text" placeholder="Question" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="question_number">Question Number</label>
  <div class="col-md-6">
  <input id="question_number" name="question_number" type="text" placeholder="Question" class="form-control input-md">
  </div>

</div>
  <center><input type="submit" value="Submit"></center>
</fieldset>
</form>




 </div>
 </div>

<center><h1>Add a result to the quiz</h1></center>
	<div class="row">
<div class="col-md-12">

{{ Form::open(['route'=>'result.store','class'=>'form-horizontal', 'role'=>'form', 'id'=>'quizform']) }}
<fieldset>


<input type="hidden" value="{{{$quizid}}}" name="quizid">

<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title of the result</label>
  <div class="col-md-6">
  <input id="title" name="title" type="text" placeholder="Question" class="form-control input-md">
  </div>

</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="result_number">Result number</label>
  <div class="col-md-6">
  <input id="result_number" name="result_number" type="text" placeholder="Question" class="form-control input-md">
  </div>

</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text">Text, expand the result dude</label>
  <div class="col-md-6">
  <input id="text" name="text" type="text" placeholder="Question" class="form-control input-md">
  </div>

</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="imgurl">Link to the picture of the result</label>
  <div class="col-md-6">
  <input id="imgurl" name="imgurl" type="text" placeholder="Question" class="form-control input-md">
  </div>

</div>

  <center><input type="submit" value="Submit"></center>
</fieldset>
</form>

<br>


 </div>
 </div>
 <div class="row">
 <div class="col-md-8">
<center><h1>Questions attached to this quiz</h1></center>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>

        <th>Question Number</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($questions as $question)
        <tr class="odd gradeX">

            <td>{{{$question->question_number}}}</td>
            <td>{{{$question->Text}}}</td>
            <td> <a class="btn btn-primary" href="/quiz/public/admin/quest/{{{$question->id}}}">Edit</a></td>
            <td> <a href="{{URL::route('delete_stuff', ['quiz_questions',$question->id]);}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
 </div>
 </div>
 <hr>
  <div class="row">
  <div class="col-md-8">
  Results
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr>
         <th>Id</th>
         <th>Title</th>
         <th>Contents</th>
         <th>Link to image</th>
         <th>Delete</th>
     </tr>
     </thead>
     <tbody>
     @foreach($results as $result)
         <tr class="odd gradeX">
             <td>{{{$result->id}}}</td>
             <td>{{{$result->title}}}</td>
             <td>{{{$result->Text}}}</td>
             <td>{{{$result->imgurl}}}</td>
             <td> <a href="{{URL::route('delete_stuff', ['quiz_results',$result->id]);}}" class="btn btn-danger">Delete</a></td>
         </tr>
         @endforeach
     </tbody>
 </table>
  </div>
  </div>
 </div>
</body>
</html>
