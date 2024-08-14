<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{url('CSS/header1.css')}}">
    </head>

</head>
<body>
<div class="containerfirst">
    

<div class="container">
  <div class="first_div">
<table style="width: 100%">
  <tr>
     <td style="width: 50%"> <h2>Tutor's Dairy</h2></td>
     <td style="width: 50%">

          <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="font-size:20px"><u style="border-bottom: 1.5px solid green">Log in</u></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="font-size:20px;margin-left: 16px"> <u style="border-bottom: 1.5px solid red">Register</u>  </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

     </td>


  </tr>

</table>
  </div>


  <div class="last_div">
    
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



</div>
</body>
</html>