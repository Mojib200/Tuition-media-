<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{url('CSS/header.css')}}">
    </head>

</head>
<body>
<div class="containerfirst">
    
<div class="container">
  <h2>Tutor's Dairy</h2>
  <div class="btn-group btn-group-justified" style="">
      <div class="btn-group btn-group-justified" style="">
    <div class="btn-group">
      <a href="{{ url('/hiretutor') }}" style="color:white">
      <button type="button" class="btn btn-primary">Hire a Tutor (It's Free)
      </button>
      </a>
    </div>

    <div class="btn-group">
       <a href="{{ url('/registration') }}" style="color:white">
        <button type="button" class="btn btn-primary" style="border-radius: 14px">
         Become a Tutor
        </button>
       </a>
    </div>

    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Job Board <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Ofline Tuition</a></li>
        <li><a href="#">Online Tuition</a></li>
        <li><a href="#">School Job</a></li>
        <li><a href="#">Coaching Job</a></li>
      </ul>
    </div>

  </div>
</div>

</div>
</body>
</html>