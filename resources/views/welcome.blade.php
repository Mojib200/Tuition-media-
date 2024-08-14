<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('CSS/footer.css')}}">
               <link rel="stylesheet" href="{{url('CSS/welcomepage.css')}}">
        <!-- Styles -->
    </head>
    <body class="antialiased" style="background-color:#B0E0E6 ">
     <header style="position: fixed;width: 100%">   @include('layouts.header_1');</header>

<div class="basic_details">
    <div class="under_basic_details">
         <h4>Divisional</h4>
    </div>
</div>


<div class="tuition_job">
   <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
            <x-input-label for="name" :value="__('School Name- ')" />
            <br>
            <x-text-input id="school_name" class="block mt-1 w-full" type="text" name="school_name" />
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


<div class="popular_tutors">
    <div class="center">
         <h2 style="text-align: center;">Our Popular Tutors</h2>
         <h6 style="font-size:20px;text-align: center;">Here are few of the Verified Teachers</h6>   
    </div>

</div>






        <footer> 
            <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="child">
                        Etc_Tuiiton is a platform[media] where we provide tuition to teachers and responsible teachers to students. We also provide job vacancies such as school, college and many companies. We have been in this field since 2016. Our team has been working generously and tremendously since then.

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="child">
                         <table>
                            <tr><a href="">Terms and Conditions</a><br></tr>
                            <tr><td><a href="">Become a tutor</a><br></td></tr>
                            <tr><td>  <a href="">Hire a tutor</a></td></tr>
                        </table>
                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="child">
                        <table>
                            <tr><th>Social Accounts</th></tr>
                            <tr><td>Facebook</td></tr>
                            <tr><td>Youtube</td></tr>
                            <tr><td>Instagram</td></tr>
                        </table>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="child">
                        <h6>CONTACT US</h6>
                        <ul>
                            <li>Cell: 01773140589</li>
                            <li>WhatsApp: 01773140589</li>
                            <li>Email: etctuitionmedia@gmail.com</li>
                        </ul>
                        <h6>Office Address</h6>
                        <ul>
                            <li>Dhaka Office:Adabor Monsurabad,Block B Road 4-House 34,6th floor</li>
                            <li>Rangpur Office:Ward no 6,119/1 Chikonmati pathanpara,Domar nilphamari, Rangpur</li>
                        </ul>
</table>
                    </div>
                </div>
            </div> 
</div>
        </footer>
    </body>
</html>
