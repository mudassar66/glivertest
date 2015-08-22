<!DOCTYPE html>
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/ico" href="{{ Url::assets('img/logo.png') }}">

    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <!--    LOAD CUSTOM STYLES    -->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ Url::assets('css/style.css') }}">
    
</head>
<body>
<div class="gliverContainer clearfix">
    <header>
        <img src="{{ Url::assets('img/logo.png') }}" alt="gliver logo" class="gliverLogo">
        <div class="headerText">
            <h1>Welcome to Gliver<br><span class="subtext"> User Listing </span> </h1>
            @if (Session::has('user') && trim(Session::get('user')) !='')

            <h4 class="gliver-text">Welcome <a href="{{ Url::base('user/profile') }}">{{ Session::get('user')}}</a> | <a href="{{ Url::base('user/logout') }}">Logout</a></h4>
             @else
                <h1>
                    Sign Up <a href="{{ Url::base('user/signup') }}">Here</a>
                    or 
                    <a href="{{ Url::base('user/signin') }}">Here</a>

                </h1>
                @endif
        </div>
    </header>
    

