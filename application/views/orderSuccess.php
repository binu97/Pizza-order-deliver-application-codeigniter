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
    <link rel="shortcut icon" href="<?php echo base_url('/assets/images/pizza_logo.png'); ?>">

    <style>
html{
  color: white;
}
.pizza_menu table,tr,tbody,td{
  color: white;
}

.pizza_menu{
  color: white;
}
h3{
  color: white;
}
</style>

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
            <li class="nav-item"><a href="<?php echo base_url()?>index.php/Home" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="<?php echo base_url()?>index.php/AboutUs" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="<?php echo base_url()?>index.php/ContactUs" class="nav-link">Contact Us</a></li>
            <li class="nav-item"><a href="<?php echo base_url()?>index.php/TermsAndConditions" class="nav-link">Terms and Conditions </a></li>
            <button> <a href="<?php echo base_url()?>index.php/Menu" role="button">Order Now</a></button>
            <a href="<?php echo base_url()?>index.php/Cart" class="btn btn-outline-danger ml-5 ">cart</a>
          </ul>
        </div>      
  </div>
</nav>
</header> 


<div class="col-md-12 col-lg-12 col-sm-12">
  <div class="alert alert-success">Your order has been placed successfully.</div>
</div>
    <br>
    <div class="pizza_menu container" style = "background-color: #3a100d; padding:20px;  border: 1px solid white;">
      <h1 class="text-center">Order Info</h1>
      <table style = "margin-left:480px; font-size:20px;"  >
        <br>         
        <tr><td><b>Buyer Name</b></td>
          <td>: <?php echo $details['name']?></td></tr>

        <tr><td><b>Email</b></td>
           <td>: <?php echo $details['email']?></td></tr> 
                
        <tr><td><b>Phone</b></td>
            <td>: <?php echo $details['phone']?></td></tr>

        <tr><td><b>Address</b></td>
            <td>: <?php echo $details['address'] ?></td></tr>        
                
        <tr><td><b>Delivery time</b></td>
             <td>: <?php echo $details['deliveryTime'] ?>
              </td>
        </tr> 

      </table>
    </div>
<br>
<h1 class="text-center" style = "color:#f5980c;">Come Back Again!</h1>
<br>
<footer>
<div id="wrapper">
    <div id="footer">
      <p> © Pizza Now . All rights reserved. Created by </p> </div>
 </div>
</footer>
</body>
</html>