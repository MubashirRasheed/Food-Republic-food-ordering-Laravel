<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  
    <title>Food Republic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/page-5.css')}}" media="screen">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700&display=swap" rel="stylesheet">
    
    <style>
      html{
        font-family: 'Lato', sans-serif;
        font-size: 20px;
        font-weight: 300;
        text-rendering: optimizeLegibility;
      }
    </style>

  </head>
  <body  data-home-page-title="Page 5" class="u-body u-xl-mode">
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
                        
                    </form></a></li>
                    
                  
                    
              
              
                  
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a> <!-- No href -->
        </div>
    </nav>
    <section class="u-align-left u-clearfix u-section-1" id="carousel_b70a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
                  <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-expanded-width-xs u-image u-image-contain u-image-default u-image-1" src="img/abput.jpg" alt="" data-image-width="1300" data-image-height="1262">
                  <!-- <img class="u-expanded-width-md u-image u-image-contain u-image-2" src="images/dddw-min.png" data-image-width="1000" data-image-height="935"> -->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">About</h2>
                  <div class="u-border-10 u-border-palette-2-light-2 u-line u-line-horizontal u-line-1"></div>
                  <p class="u-custom-font u-font-montserrat u-text u-text-2">We are the people behind sushi for all mankind. Our mission is to satisfy our guests with the best food quality, excellent service and great value while providing a pleasant and clean ambiance for an unforgettable dining experience. Kabuki Restaurant's diverse menu showcases traditional and innovative Japanese cuisine and includes an award-winning Kid’s Menu (Restaurant Hospitality Magazine) and a dedicated vegetarian and gluten-free menu. Complimenting that, Kabuki also boasts an impressive beverage and happy hour program featuring classic cocktails, wine and beer, as well as Japanese-inspired drinks.&nbsp;<br>
                    <br>
                    
                  </p>
                  <a href="https://nicepage.me" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-2-light-1 u-btn-1"><span class="u-icon u-text-palette-2-light-1"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+1 (234) 567-8910
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    </section>
    <footer>
        <div class="row">
           <div class="col span-1-of-2">
               <ul class="footer-nav">
                   <li><a href="#">About us</a></li>
                   <li><a href="#">Blog</a></li>
                   <li><a href="#">Press</a></li>
                   <li><a href="#">iOS App</a></li>
                   <li><a href="#">Android AppA</a></li>
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