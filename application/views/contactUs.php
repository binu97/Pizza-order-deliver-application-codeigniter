<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit-=cover">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pizza Now</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/pizza_logo.png'); ?>">
</head>
<body>
<header>  
<nav class="navbar bg-light navbar-light navbar-expand-lg">
  <div class="container">
    <a href="index.html" class="navbar-brand"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=#navbarResponsive>
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"> 
            <li class="nav-item"><a href="<?php echo base_url('/index.php/Home')?>" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="<?php echo base_url('/index.php/AboutUs')?>" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="<?php echo base_url('/index.php/ContactUs')?>" class="nav-link">Contact Us</a></li>
            <li class="nav-item"><a href="<?php echo base_url('/index.php/TermsAndConditions')?>" class="nav-link">Terms and Conditions </a></li>
            <button> <a href="<?php echo base_url('/index.php/Menu')?>" role="button">Order Now</a></button>
          </ul>
        </div>      
  </div>
</nav>
</header> 
<br> <br><br>
<h1 class="contactUs_h1" >Hotline</h1>
<div class="content">
    <h5 class="contactUs_h5">    
    <img src = "../assets/images/phone.png" alt="Logo" ></a>
    <br>
                +94 112 729729<br>
                <br>
                +94 114 729729<br>
                <br>
                +94 117 729729<br>     
    </h5>    
<br>
</div>
<footer>
<div id="wrapper">
    <div id="footer">
      <p> © Pizza Now . All rights reserved. Created by </p> </div>
 </div>
</footer>
</body>
</html>
