<!DOCTYPE html>
<html>
<head>
	<title>hiretutor</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{url('CSS/guardian/hiretutor.css')}}">
</head>
<body>
<header> @include('layouts.header');</header>
<div class="guardian_request_head">

<div class="center">
  <h4>Thanks for reaching out to us!  Sure we can help you find an appropriate tutor.</h4>
</div>

<div class="guardian_request">
<form method="POST" action="{{ route('register') }}">
        @csrf
<h4>Please drop down your:-</h4> 
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
            <x-input-label for="name" :value="__('School Name- ')" />
            <br>
            <x-text-input id="school_name" class="block mt-1 w-full" type="text" name="school_name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
<br>
            <x-input-label for="grade" :value="__('Class/Grade- ')" />
            <br>
            <x-text-input id="school_name" class="block mt-1 w-full" type="text" name="grade"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

<br>
            <x-input-label for="subjects" :value="__('Subject preference- ')" />
            <br>
            <x-text-input id="school_name" class="block mt-1 w-full" type="text" name="subjects" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

    </div>
    <div class="col-sm-4">

                  <x-input-label for="address" :value="__('Home Address-  ')" />
            <br>
            <x-text-input id="school_name" class="block mt-1 w-full" type="text" name="address" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
<br>
            <x-input-label for="days" :value="__('Number of days you wish to take classes-  ')" />
            <br>
            <x-text-input id="days" class="block mt-1 w-full" type="text" name="days"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

<br>
            <x-input-label for="salary" :value="__('Amount you wish to pay your tutor- ')" />
            <br>
            <x-text-input id="salary" class="block mt-1 w-full" type="text" name="salary" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
<div class="col-sm-4">

<x-input-label for="teacher_gender" :value="__('Tutor Gender Preference(if any)- ')" />
<br>
<x-text-input id="teacher_gender" class="block mt-1 w-full" type="text" name="teacher_gender" />
<x-input-error :messages="$errors->get('name')" class="mt-2" />
<br>
<x-input-label for="phone" :value="__('Phone Number- ')" />
<br>
<x-text-input id="phone" class="block mt-1 w-full" type="text" name="name"/>
<x-input-error :messages="$errors->get('name')" class="mt-2" />

<br>
<div class="mt-4">
<x-input-label for="email" :value="__('Email')" />
<br>
<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
<x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

</div>
</div>
<br>
             <x-primary-button class="ms-4">
                {{ __('Teacher Request') }}
            </x-primary-button>
</div>
</form>

</div>


</div>
<footer> @include('layouts.footer');</footer>
</body>
</html>