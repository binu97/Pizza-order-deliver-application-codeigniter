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
.checkout{
  color: white;
}
.container table,tr,tbody,td{
  color: white;
}

.container{
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
            <button> <a href="<?php echo base_url()?>/index.php/Menu" role="button">Order Now</a></button>
            <a href="<?php echo base_url()?>/index.php/Cart" class="btn btn-outline-danger ml-5 ">cart</a>
          </ul>
        </div>      
  </div>
</nav>
</header> 

<div class="checkout">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6" style="margin: auto; display: block;" >
        <br>
            <h4 class="mb-3">Customer Details</h4>
            <form action="<?php echo base_url()?>index.php/OrderSuccess" method="Post">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id = "name" placeholder="Enter name" required>  
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id = "email" placeholder="Enter email" required>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id = "phone" placeholder="Enter contact no" required>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id = "address" placeholder="Enter address" required>
                </div>
                <br>
                <input class="btn-lg btn btn-success btn-block" type="submit" name="placeOrder" value="Place Order">
                <br>
            </form>
        </div>
    </div>
</div>
<footer>
<div id="wrapper">
    <div id="footer">
      <p> © Pizza Now . All rights reserved. Created by </p> </div>
 </div>
</footer>
</body>
</html>