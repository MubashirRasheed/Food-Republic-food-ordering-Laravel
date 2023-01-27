<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="responsive.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/normalize.css"> -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700&display=swap" rel="stylesheet">
    <title>Food Republic</title>
</head>
<body>

    <nav>
        <div class="row"> 
            <img src="img/logo.png" alt="Omnifood Logo" class="logo">
            <img src="img/logo.png" alt="Omnifood Logo" class="logo-black">
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

    <section class="section-cities">
        <div class="row">
            <h2>We are currently in these cities</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-4 card">
                <img src="img/tokyo1.jpg" alt="Tokyo">
                <h3>Tokyo</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icons-small"></i>
                    1500+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icons-small"></i>
                    50+ Top Chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icons-small"></i>
                    <a href="#" class="site">@food_republic.jp</a>
                </div>
                
            </div>
            <div class="col span-1-of-4 card">
                <img src="img/yokohama.jpg" alt="yokohama">
                <h3>Yokohama</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icons-small"></i>
                    1300+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icons-small"></i>
                    40+ Top Chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icons-small"></i>
                    <a href="#" class="site">@food_republic.jp</a> 
                </div>
                
            </div>
            <div class="col span-1-of-4 card">
                <img src="img/osaka.jpg" alt="osaka">
                <h3>Osaka</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icons-small"></i>
                    1400+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icons-small"></i>
                    40+ Top Chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icons-small"></i>
                    <a href="#" class="site">@food_republic.jp</a>
                </div>
                
            </div>
            <div class="col span-1-of-4 card">
                <img src="img/fukouka.jpg" alt="fukouka">
                <h3>Fukouka</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icons-small"></i>
                    1200+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icons-small"></i>
                    35+ Top Chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icons-small"></i>
                    <a href="#" class="site">@food_republic.jp</a>
                </div>
                
            </div>
        </div>
    </section>

    <footer>
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