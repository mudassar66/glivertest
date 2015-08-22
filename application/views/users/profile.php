<!DOCTYPE html>
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/ico" href="{{ Url::assets('img/logo.png') }}">

    <meta charset="UTF-8">
    <title>{{$title}}</title>
   <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ Url::assets('css/style.css') }}">
    <link rel="stylesheet" href="{{ Url::assets('css/bootstrap.min.css') }}">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ Url::assets('js/validator.js') }}"></script>
    
</head>
<body>
<div class="gliverContainer clearfix">
    <header>
        <img src="{{ Url::assets('img/logo.png') }}" alt="gliver logo" class="gliverLogo">
        <div class="headerText">
            <h1>Welcome to Gliver<br><span class="subtext"> User Listing </span> </h1>
            @if (Session::has('user') && trim(Session::get('user')) !='')

            <h4  >Welcome <a href="{{ Url::base('user/profile') }}">{{ Session::get('user')}}</a> | <a href="{{ Url::base('user/logout') }}"><span class='gliver-text'>Logout</span></a></h4>
             @else
                 <h2>
                    Sign Up <a href="{{ Url::base('user/signup') }}"><span class='gliver-text'>Here</span></a>
                    or 
                   Sign In <a href="{{ Url::base('user/signin') }}"><span class='gliver-text'>Here</span></a>

                </h2>
                @endif
        </div>
    </header>
    



<div class="form-col">

       @foreach ($users as $user)  
       <div class="row">
        <label>Email address:</label>
        {{ $user['email']}}
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label  >First Name:</label>
            {{ $user['first_name']}} </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label >Last Name:</label>
        {{ $user['last_name']}}
        </div>
        <div class="row">&nbsp;</div>
        
        @endforeach
         
  
    </div> 
</div>
    <!-- /container 
EO gliverContainer-->
 
    
</body>
</html>