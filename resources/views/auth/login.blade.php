
  <!DOCTYPE html>
  <html>
  <head>
      <title>login</title>

        <link rel="stylesheet" href="{{url('CSS/login.css')}}">
  </head>
  <body>
 <header>   @include('layouts.header');</header>
    <x-auth-session-status class="mb-4" :status="session('status')" />

<div class="center">
    
<form method="POST" action="{{ route('login') }}" class="login_form">
        @csrf
        <div class="">Login to Tutor's Diary</div>
  <br>     
            <!-- Email Address -->
            <x-input-label for="email" :value="__('Email')" />
            <br>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <br>

  <br>
            <x-input-label for="password" :value="__('Password')" />
            <br>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <br><br>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
<br>

            <!-- Remember Me -->      
               <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

                        @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
<br>
<button>
    Create New Account
</button>

</form> 

</div>
  </body>
  </html>