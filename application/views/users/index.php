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
    


    <div class="content">
       

        <div class="left-col">

            <ul class="circles">
                @if (Session::has('user') && trim(Session::get('user')) !='')
                <li>
                     <div class="wrapper">
                        <h4 class="gliver-text">Welcome <a href="{{ Url::base('user/profile') }}">{{ Session::get('user')}}</a> | <a href="{{ Url::base('user/logout') }}">Logout</a></h4>
                        
                    </div>  
                </li>
                @else
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
                @endif
                
            </ul>
        </div>

    </div>
 </div><!--EO gliverContainer-->
</body>
</html>

 