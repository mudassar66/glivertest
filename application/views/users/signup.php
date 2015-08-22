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
    @if(Session::has('message'))
     <div class="row">&nbsp;
        <p class="alert">{{ Session::get('message') }}</p>
    </div>

    @endif
    <div class="row">&nbsp;</div>

    <form class="form-signin" id="signup" name="signup" method="post" action="{{ Url::base('user/register') }}">
        <h2 class="form-signin-heading">Please sign Up</h2>
        <div class="row">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword"  name="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label for="inputPassword2" class="sr-only">Type Password Again</label>
        <input type="password" id="inputPassword2"  name="inputPassword2" class="form-control" placeholder="Password" required>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label for="inputFname" class="sr-only">First Name</label>
        <input type="text" id="inputFname"  name="inputFname"  class="form-control" placeholder="First Name" required autofocus>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label for="inputLname" class="sr-only">Last Name</label>
        <input type="text" id="inputLname" name="inputLname" class="form-control" placeholder="Last Name" required autofocus>
        </div>
        <div class="row">&nbsp;</div>
        
        
         
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      </form>

    </div>  
    <script>
    
    $('#signup').validator()
    </script>
  </div><!--EO gliverContainer-->
</body>
</html>