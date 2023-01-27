<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700&display=swap" rel="stylesheet">
    <title>Food Republic</title>
    
</head>
<body>

             
   
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
            @auth
                        <li><a ></li><span style="float:right; color:white; margin-top:8px; margin-left:20px;margin-right: -65px;">Welcome, {{auth()->user()->userName}}!</span></a></li>
                    @else
                        <li><a href="{{url('/signin/')}}">Sign up</a></li>
                    @endauth
                    <li><a href="{{url('/cart/')}}"><i class="fas fa-shopping-cart"></i><span>(3)</span></a></li>
            <li><a><form action="/logout" method="POST">
                        @csrf 
                        <button type="submit" class="btn btn-full" style="margin-top: 0;">Logout</button>
                    </form></a></li>
                    
                  
                    
				</ul>
				<a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a> <!-- No href -->
			</div>
		</nav>
    <section class="section-plans js--section-plans" id="plans">
        <div class = "row">
            <h2>Menu</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3 class="product-heading" >Sushi</h3>
                        <div class="sushi-div">
                            <img class= top_sushi src="img/sushi.jpg" alt="sushi">
                        </div>
                        
                        <p class="plan-price">$399</p>
                        <p class="plan-price-meal">(exclusive of tax)</p>
                        
                    </div>

                    <div class="product-disc">
                        <p> An assorted selection of Nigiri (4 pieces), California Maki (4 pieces), and Tempura Maki (4 pieces).
                        </p>
                    </div>

                    <div>
                        <a href="#" class="btn btn-full or-btn">order now</a>
                    </div>

                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3 class="product-heading" >Ramen</h3>
                        <div class="sushi-div">
                            <img class= top_sushi src="img/ramen.jpg" alt="sushi">
                        </div>
                        
                        <p class="plan-price">$250</p>
                        <p class="plan-price-meal">(exclusive of tax)</p>
                        
                    </div>

                    <div class="product-disc">
                        <p>Homemade ramen noodles in vegetable broth.</p>
                    </div>

                    <div>
                        <a href="#" class="btn btn-full or-btn">order now</a>
                    </div>

                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3 class="product-heading" >Prawn Tempura</h3>
                        <div class="sushi-div">
                            <img class= top_sushi src="img/tempura.jpg" alt="sushi">
                        </div>
                        
                        <p class="plan-price">$199</p>
                        <p class="plan-price-meal">(exclusive of tax)</p>
                        
                    </div>

                    <div class="product-disc">
                        <p>Fresh prawn covered with tempura batter fried until golden brown.</p>
                    </div>

                    <div>
                        <a href="#" class="btn btn-full or-btn">order now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-plans js--section-plans section-all-menu" id="plans">
    <div class="row">
        <div class="col span-1-of-3">
            <div class="plan-box js--wp-4">
                <div>
                    <h3 class="product-heading" >Sushi</h3>
                    <div class="sushi-div">
                        <img class= top_sushi src="img/sushi.jpg" alt="sushi">
                    </div>
                    
                    <p class="plan-price">$399</p>
                    <p class="plan-price-meal">(exclusive of tax)</p>
                    
                </div>

                <div class="product-disc">
                    <p> An assorted selection of Nigiri (4 pieces), California Maki (4 pieces), and Tempura Maki (4 pieces).
                    </p>
                </div>

                <div>
                    <a href="#" class="btn btn-full or-btn">order now</a>
                </div>

            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box js--wp-4">
                <div>
                    <h3 class="product-heading" >Ramen</h3>
                    <div class="sushi-div">
                        <img class= top_sushi src="img/ramen.jpg" alt="sushi">
                    </div>
                    
                    <p class="plan-price">$250</p>
                    <p class="plan-price-meal">(exclusive of tax)</p>
                    
                </div>

                <div class="product-disc">
                    <p>Homemade ramen noodles in vegetable broth.</p>
                </div>

                <div>
                    <a href="#" class="btn btn-full or-btn">order now</a>
                </div>

            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box js--wp-4">
                <div>
                    <h3 class="product-heading" >Prawn Tempura</h3>
                    <div class="sushi-div">
                        <img class= top_sushi src="img/tempura.jpg" alt="sushi">
                    </div>
                    
                    <p class="plan-price">$199</p>
                    <p class="plan-price-meal">(exclusive of tax)</p>
                    
                </div>

                <div class="product-disc">
                    <p>Fresh prawn covered with tempura batter fried until golden brown.</p>
                </div>

                <div>
                    <a href="#" class="btn btn-full or-btn">order now</a>
                </div>

            </div>
        </div>
    </div>
</div>
</section>

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

    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="js/scripts.js"></script> <!-- Sticky nav -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="vendors/js/gmaps.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>