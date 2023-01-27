<!DOCTYPE html>
<html>
<head>
	<title>Food Republic</title>
	<link rel="stylesheet" href="{{asset('css/grid.css')}}">
    
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<nav>
	<div class="row"> 
		<img src="img/logo.png"  class="logo">
		<img src="img/logo.png"  class="logo-black">
		<ul class="main-nav js--main-nav">  

			<li><a href="{{url('/index/')}}">Home</a></li>
			<li><a href="#works">How it works</a></li>
			<li><a href="{{url('/products/')}}">Menu</a></li>
			<li><a href="{{url('/cities/')}}">Our locations</a></li>
			<li><a href="{{url('/about/')}}">About us</a></li>
			<li><a href="{{url('/signin/')}}">Sign up</a></li>
		</ul>
		<a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a> <!-- No href -->
	</div>
</nav>
<body>
	<div class="sign-body">
		<div class="main">  	
			<input type="checkbox" id="chk" aria-hidden="true">
	
			
	
				<div class="login">
					<form style="margin-top:100%;" action="checklogin" method="POST">
                    @csrf
						<label >Login</label>
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="password" name="Password" placeholder="Password" required="">
						<button class="sbtn">Login</button>
					</form>
				</div>
		</div>
	</div>

	<footer id="works>
		<div class="row">
		   <div class="col span-1-of-2">
			   <ul class="footer-nav">
				   <li><a href="#">About us</a></li>
				   <li><a href="#">Blog</a></li>
				   <li><a href="#">Press</a></li>
				   <li><a href="#">iOS App</a></li>
				   <li><a href="#">Android App</a></li>
			   </ul>
		   </div>
		   <div class="col span-1-of-2">
			   <ul class="social-icons">
				   <li><a href="#"><i class="ion-social-facebook"></i></a></li>
				   <li><a href="#"><i class="ion-social-twitter"></i></a></li>
				   <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
				   <li><a href="#"><i class="ion-social-instagram"></i></a></li>
			   </ul>
		   </div>
		</div>
		<div class="row">
			<p>
				Copyright © 2022 by food-republic. All rights reserved.
			</p>
		</div>
	</footer>
	
	
</body>
</html>