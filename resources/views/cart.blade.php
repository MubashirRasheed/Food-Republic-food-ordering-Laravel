
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{asset('css/cart.css')}}">
   <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700&display=swap" rel="stylesheet">
   <link rel="icon" type="image/x-icon" href="img/favicon.png">
   <style>
      .main-navbar li {
    float: right;
    display: block;
    margin-left: 40px;
    list-style: none;
    transition: border-bottom 0.2s;
    padding: 8px 0;
}
   </style>
   


</head>
<body>
   
<header class="header">

   <section class="flex">
                  
      <a href="home.html" class="logo">Food Republic</a>

      <nav class="navbar">
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
      </nav>

   </section>

</header>

<section class="products">

   <h1 class="title">your cart</h1>

   <div class="cart-total">
      <p>grand total : <span>$9/-</span></p>
      <a href="checkout.html" class="btn">checkout orders</a>
      </div>
   </div>

   <div class="box-container">

      <div class="box">
        
         <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
         <img src="img/sushi.jpg" alt="">
         <div class="name">delicious pizza 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            <button type="submit" class="fas fa-edit"></button>
         </div>
         <div class="sub-total">sub total : <span>$3</span></div>
      </div>

      <div class="box">
         
         <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
         <img src="img/ramen.jpg" alt="">
         <div class="name">main dish 02</div>
         <div class="flex">
            <div class="price"><span>$</span>3</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            <button type="submit" class="fas fa-edit"></button>
         </div>
         <div class="sub-total">sub total : <span>$3</span></div>
      </div>

      <div class="box">
         
         <button class="fas fa-times" type="submit" name="delete" onclick="return confirm('delete this item?')"></button>
         <img src="img/tempura.jpg" alt="">
         <div class="name">delicious dessert 01</div>
         <div class="flex">
            <div class="price"><span>$</span>3</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
            <button type="submit" class="fas fa-edit"></button>
         </div>
         <div class="sub-total">sub total : <span>$3</span></div>
      </div>

   </div>

   <div class="more-btn">
      <a href="#" class="delete-btn" onclick="return confirm('delete all from cart?');">delete all</a>
   </div>



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