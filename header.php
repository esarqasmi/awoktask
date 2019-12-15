<?php define("BASE_PATH", dirname(__FILE__)); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesitem.com/demos/html/eFeri/product-list-view-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2019 08:43:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>E-BUY</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
  <!-- Header Part Start -->
   <header id="header">
       <div class="container">
           <div class="row">
               <div class="header-content">
                   <div class="col-md-4">
                       <div class="header-left"> 
                            <div class="sel-box">
                                 <a href="tel:+12345678900">Contact: +971 54 508 2522</a>
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-md-offset-4">
                       <div class="header-right text-right">
                            
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
<!-- Header Part End -->
   
<!-- mobile menu end -->     
<nav class="mobile-menu hidden">
  <a href="index.html">
      <img src="images/logo.png" alt="logo">
  </a>
   <ul>
        <li class="">
            <a href="#">
              Home
            </a>
            <ul>
              <a class="" href="index.html">Home 1</a>
              <a class="" href="index2.html">Home 2</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Shop
            </a>
            <ul>
              <a class="" href="product-grid-view.html">Product Grid View</a>
              <a class="" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
              <a class="" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
              <a class="" href="product-details.html">Product Details</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <ul>
              <a class="" href="about.html">About</a>
              <a class="" href="shopping-cart.html">Cart</a>
              <a class="" href="checkout.html">Checkout</a>
              <a class="" href="my-account.html">Login</a>
              <a class="" href="my-account.html">Register</a>
              <a class="" href="shopping-cart.html">Whislist</a>
              <a class="" href="404.html">404</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <ul>
              <a class="" href="blog-grid-view.html">Blog Grid View</a>
              <a class="" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
              <a class="" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
              <a class="" href="blog-details.html">Blog Details</a>
            </ul>
          </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
<!-- mobile menu end -->   
 
<!-- Navbar Part Start -->   
    <nav class="navbar navbar-default hidden-xs">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="logo" class="img-responsive">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
<!--            <li class="active"><a href="index.html">Home</a></li>-->
<!--            <li><a href="product-grid-view.html">Men</a></li>-->
<!--            <li><a href="product-grid-view-with-sidebar.html">Women</a></li>-->
<!--            <li><a href="product-list-view-with-sidebar.html">Accesorries</a></li>-->
<!--            <li><a href="blog-grid-view.html">Blog</a></li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Home
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.html">Home 1</a>
                  <a class="dropdown-item" href="index2.html">Home 2</a>
                </div>
              </li>
              <li><a class="dropdown-item" href="about.html">About</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="product-grid-view.html">Product Grid View</a>
                  <a class="dropdown-item" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
                  <a class="dropdown-item" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
                  <a class="dropdown-item" href="product-details.html">Product Details</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="shopping-cart.html">Cart</a>
                  <a class="dropdown-item" href="checkout.html">Checkout</a>
                  <a class="dropdown-item" href="my-account.html">Login</a>
                  <a class="dropdown-item" href="my-account.html">Register</a>
                  <a class="dropdown-item" href="shopping-cart.html">Whislist</a>
                  <a class="dropdown-item" href="404.html">404</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="blog-grid-view.html">Blog Grid View</a>
                  <a class="dropdown-item" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
                  <a class="dropdown-item" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
                  <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                </div>
              </li>
            <li><a href="contact.html">Contact</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="search-form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </li>
             
           </ul>
        </div>
    </div>
</nav>
<!-- Navbar Part End -->
    
<!-- mobile logo start -->      
<nav class="navbar-default visible-xs">
  <div class="container">
      <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="logo" class="img-responsive">
          </a>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="search-form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </li>
              
           </ul>
        </div>
    </div>
</nav>
<!-- mobile logo end -->  
   
   <!-- About Banner Start -->
   <section id="about">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>M. Esar ul haq Qasmi </h2>
                   <p>  <span>Product List View With JSON File Clean</span></p>
               </div>
           </div>
       </div>
   </section>
   <!-- About Banner End -->
