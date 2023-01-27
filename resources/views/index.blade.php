<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700&display=swap" rel="stylesheet">
    <title>Food Expert</title>
    <style>

        header{
            background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/main.jpg);
            height:100vh;
            background-size: cover;
            background-position:center;
            background-attachment: fixed;
        }

        .section-reviews{
                background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(img/custumer.jpg);
                background-size: cover;
                margin-left: 0;
                color: white;
                background-attachment: fixed;
    }
    </style>

</head>
<body>
    <header  >



        <nav>
            <div class="row">
                <img class="food-logo" src="img/logo-whitee.png" alt="foodlogo">
                <ul class="main-navbar">

                    <li><a><form action="/logout" method="POST">
                        @csrf 
                        <button type="submit" class="btn btn-full" style="margin-top: 0;">Logout</button>
                    </form></a></li>
                    <li><a href="{{url('/cart/')}}"><i class="fas fa-shopping-cart"></i><span>(3)</span></a></li>
                  
                    @auth
                        <li><a ></li><span style="float:right; color:white; margin-top:8px; margin-left:20px;margin-right: -65px;">Welcome, {{auth()->user()->userName}}!</span></a></li>
                    @else
                        <li><a href="{{url('/signin/')}}">Sign up</a></li>
                    @endauth
                    

                    <li><a href="{{url('/about/')}}">About us</a></li>
                    <li><a href="{{url('/cities/')}}">Our locations</a></li>
                    <li><a href="{{url('/products/')}}">Menu</a></li>
                    <li><a href="#works">How it works</a></li>
                    <li><a href="{{url('/index/')}}">Home</a></li>

                </ul>
            </div>
        </nav>
       
        <div class="main-header-bar">
            <div class="mainfoood">
                <h1 class="main-line">Food for day to day life</h1>
                <a href="#" class="btn btn-full">I am Hungry</a>
                <a href="products" class="btn btn-ghost" >Show me more</a>
            </div>
        </div>
    </header>

    <section class="section-features">
        <div class="row">
            <h2>get food fast &mdash; good food for your everyday.</h2>
            <p class="long-para">
                Your new premium food delivery service. Forget about cooking, we will take care of it. We are really good at it.
            </p>
        </div>

        <div class="row">
            <div class="col span-1-of-4 card">
                <i class="ion-ios-infinite sec1-icon"></i>
                <h3>upto 365 days/year</h3>
                <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
            </div>

            <div class="col span-1-of-4 card">
                <i class="ion-android-alarm-clock sec1-icon"></i>
                <h3>Ready in 30 minutes</h3>
                <p>You're only thirty minutes away from your delicious and super healthy meals delivered right in time right to your home. We really care about your apetize</p>
            </div>

            <div class="col span-1-of-4 card">
                <i class="ion-ios-nutrition sec1-icon"></i>
                <h3>100% organic</h3>
                <p>All our vegetables are super fresh, organic and local. Animals are raised in farms with great care without adding hormones or steroids. Good for your health, the environment, and it also tastes better!</p>
            </div>

            <div class="col span-1-of-4 card">
                <i class="ion-android-restaurant sec1-icon"></i>
                <h3>Order aything</h3>
                <p> Order whenever you like, we don't limit your creativity. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
            </div>
        </div>
    </section>

    <section id="mealss" class="section-meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-img">
                    <img src="img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-img">
                    <img src="img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                </figure>
            </li>
            <li>
                <figure class="meal-img">
                    <img src="img/3.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-img">
                    <img src="img/4.jpg" alt="Autumn pumpkin soup">
                </figure>
            </li>

        </ul>

        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-img">
                    <img src="img/5.jpg" alt="Palao beef steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-img">
                    <img src="img/6.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-img">
                    <img src="img/7.jpg" alt="Burger with cheddar and bacon">
                </figure>
            </li>
            <li>
                <figure class="meal-img">
                    <img src="img/8.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>
    
    <section class="section-steps">
        <div class="row">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
        </div>

        <div class="row">
            <div class="col span-1-of-2 steps-box">
                <img src="img/iphone.png" alt="app download" class="app-phone">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="work-steps">
                    <div>1</div>
                    <p>Choose the subscription plan and sign up today.</p>
                </div>
                <div class="work-steps">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                </div>
                <div class="work-steps">
                    <div>3</div>
                    <p>Enjoy your meal after less than 30 minutes. See you the next time!</p>
                </div>
                <a href="#" class="btn-app"><img src="img/download-app.svg" alt="sownload-app"></a>
                <a href="#" class="btn-app"><img src="img/download-app-android.png" alt="downlaod-app"></a>
            </div>
        </div>
    </section>

    
    


    <section class="section-plans js--section-plans" id="plans">
        <div class = "row">
            <h2>Featured Products</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3>Sushi</h3>
                        <div class="sushi-div">
                            <img class= top_sushi src="img/sushi.jpg" alt="sushi">
                        </div>
                        <div class="p-price">
                            <p class="plan-price">$399</p>
                            <p class="plan-price-meal">(exclusive of tax)</p>

                        </div>
                        
                        
                    </div>

                    <div class="p-price">
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Top Ordered</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Top Quality</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Reviewed 5 stars by customers</li>
                           
                        </ul>
                    </div>

                    <div>
                        <a href="#" class="btn btn-full order-btn">order now</a>
                    </div>

                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3>Ramen</h3>
                        <div class="sushi-div">
                            <img class= top_sushi src="img/ramen.jpg" alt="sushi">
                        </div>
                        <div class="p-price">
                            <p class="plan-price">$299</p>
                            <p class="plan-price-meal">(exclusive of tax)</p>

                        </div>
                        
                        
                    </div>

                    <div class="p-price">
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Top Ordered</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Top Quality</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Reviewed 5 stars by customers</li>
                           
                        </ul>
                    </div>

                    <div>
                        <a href="#" class="btn btn-ghost order-btn">order now</a>
                    </div>

                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3>Prawn Tempura</h3>
                        <div class="sushi-div">
                            <img class= top_sushi src="img/tempura.jpg" alt="sushi">
                        </div>
                        <div class="p-price">
                            <p class="plan-price">$199</p>
                            <p class="plan-price-meal">(exclusive of tax)</p>

                        </div>
                        
                        
                    </div>

                    <div class="p-price">
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Top Ordered</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Top Quality</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Reviewed 5 stars by customers</li>
                           
                        </ul>
                    </div>

                    <div>
                        <a href="#" class="btn btn-ghost order-btn">order now</a>
                    </div>

                </div>
            </div>


            
        </div>

        <div class="container all-menu">
            <a class="see-menu" href="products" class="link">See all menu →</a>
          </div>
    </section>


    <section class="section-reviews">
        <div class="row">
            <h2>Our custumors are our success</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    The Food we had enjoyed at the time of dinner. It was really delicious taste with great quality, everything had unique taste which we had ordered, nice arrangement and services from the staff while eating, we found nothing bad about this restaurant.
                    <cite><img src="img/oreki.png" alt=""> Oreki Houtaro</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    The Food we had enjoyed at the time of dinner. It was really delicious taste with great quality, everything had unique taste which we had ordered, nice arrangement and services from the staff while eating, we found nothing bad about this restaurant.
                    <cite><img src="img/oreki.png" alt=""> Oreki Houtaro</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    The Food we had enjoyed at the time of dinner. It was really delicious taste with great quality, everything had unique taste which we had ordered, nice arrangement and services from the staff while eating, we found nothing bad about this restaurant.
                    <cite><img src="img/oreki.png" alt=""> Oreki Houtaro</cite>
                </blockquote>
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


    <script>
        $(document).ready(function() {
 
 /* For the sticky navigation */
$('.js--section-features').waypoint(function(direction) {
   if (direction== "down") {
       $('nav').addClass('sticky');
   } else {
       $('nav').removeClass('sticky');
   }
}, {
 offset: '60px;'
});

 
 
 /* Scroll on buttons */
$('.js--scroll-to-plans').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-plans').offset().top},1000);
});
 
$('.js--scroll-to-start').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-features').offset().top},1000);
});
 
 
 /* Navigation scroll */ 
$(function() { $('a[href*=#]:not([href=#])').click(function() {
 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
     var target = $(this.hash);
     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
              scrollTop: target.offset().top
         }, 1000);
         return false;
     }
   }
});
});
 
/* Animation on scroll */
$('.js--wp-1').waypoint(function(direction) {
    $('.js--wp-1').addClass('animated fadeIn')
}, {
    offset: '50%'
});
 $('.js--wp-2').waypoint(function(direction) {
    $('.js--wp-2').addClass('animated fadeInUp')
}, {
    offset: '50%'
});
 $('.js--wp-3').waypoint(function(direction) {
    $('.js--wp-3').addClass('animated fadeIn')
}, {
    offset: '50%'
});
 $('.js--wp-4').waypoint(function(direction) {
    $('.js--wp-4').addClass('animated pulse')
}, {
    offset: '50%'
});
 
 
 /* Mobile nav */
 $('.js--nav-icon').click(function() {
    var nav = $('.js--main-nav');
    var icon = $('.js--nav-icon i');
     
    nav.slideToggle(200);
     
    if (icon.hasClass('ion-navicon-round')) {
        icon.addClass('ion-close-round');
        icon.removeClass('ion-navicon-round');
    } else {
        icon.addClass('ion-navicon-round');
        icon.removeClass('ion-close-round');
    }
 });
 
 /* Maps */
 
 var map = new GMaps({
   div: '.map',
   lat: 37.7595128, 
   lng: -122.4553591,
   zoom: 12 
 });
 
 map.addMarker({
   lat: 37.7595128,
   lng: -122.4553591,
   title: 'San Francisco',
   infoWindow: {
      content: '<p>Our San Francisco HQ</p>'
    }
 });

 
});
    </script>
    
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


