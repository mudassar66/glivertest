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
    <link rel="stylesheet" href="{{ Url::assets('css/bootstrap.min.css') }}">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<div class="gliverContainer clearfix">
    <header>
        <img src="{{ Url::assets('img/logo.png') }}" alt="gliver logo" class="gliverLogo">
        <div class="headerText">
            <h1>Welcome to Gliver<br><span class="subtext"> Sign Up / Login </span> </h1>

            
        </div>
    </header>
 

<div class="form-col">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign Up</h2>
        <div class="row">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label for="inputPassword2" class="sr-only">First Name</label>
        <input type="email" id="inputFname" class="form-control" placeholder="First Name" required autofocus>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
        <label for="inputPassword2" class="sr-only">Last Name</label>
        <input type="email" id="inputLname" class="form-control" placeholder="Last Name" required autofocus>
        </div>
        <div class="row">&nbsp;</div>
        
        
         
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      </form>

    </div> <!-- /container 
</div>EO gliverContainer-->
 

</body>
</html>