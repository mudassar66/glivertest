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
            <h1>Welcome to Gliver<br><span class="subtext"> Sign Up / Login </span> </h1>

            
        </div>
    </header>
    <div class="content">
       

        <div class="left-col">

            <ul class="circles">
                <li>
                     <div class="wrapper">
                        <h4 class="gliver-text">Sign Up <a href="{{ Url::base('user/signup') }}">Here</a></h4>
                        
                    </div> or
                    <div class="wrapper">
                        <h4 class="gliver-text">Sign In 
                        <a href="{{ Url::base('user/signin') }}">Here</a>
                        
                        </h4>
                    </div>
                </li>
                
            </ul>
        </div>

    </div>



</div><!--EO gliverContainer-->
</body>
</html>