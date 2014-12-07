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
 @if(isset($quizid->quiz_id))<li>{{ HTML::link("/admin/quiz/$quizid->quiz_id", 'Back to quiz editing')}}</li>@endif
          </ul>

        </div>
      </div>
    </nav>
 </div>
 <div class="container">
 	<div class="row">
<div class="col-md-12">
<center><h1>Add a new answer!</h1></center>
{{ Form::open(['route'=>'answer.store','class'=>'form-horizontal', 'role'=>'form', 'id'=>'quizform']) }}
<fieldset>


<div class="form-group">
  <label class="col-md-4 control-label" for="text">Answer</label>
  <div class="col-md-6">
  <input id="text" name="text" type="text" placeholder="Actual answer" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="resultnum">Result value</label>
  <div class="col-md-6">
  <input id="resultnum" name="resultnum" type="text" placeholder="The value of the corresponding result" class="form-control input-md">
  </div>
</div>

<input type="hidden" name="questid" value="{{{$questid}}}">
<!-- Text input-->

  <input type="submit" value="Submit">
</fieldset>
</form>




 </div>
 </div>


 <div class="row">
 <div class="col-md-8">
<center><h1>Answers already attached to the question</h1></center>
<table class="table table-striped table-bordered table-hover"
                                                       id="runTable">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Text</th>
                                                        <th>Value</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($answers as $answer)
                                                   <tr class="odd gradeX">
                                                       <td>{{{$answer->id}}}</td>
                                                       <td>{{{$answer->Text}}}</td>
                                                       <td>{{{$answer->result_value}}}</td>
                                                       <td> <a href="{{URL::route('delete_stuff', ['quizzes',$answer->id]);}}" class="btn btn-danger">Delete</a></td>

                                                   </tr>
                                                   @endforeach
                                                    </tbody>
                                                </table>
 </div>
 </div>
 </div>
</body>
</html>
