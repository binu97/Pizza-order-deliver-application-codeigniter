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
            <button> <a href="<?php echo base_url()?>index.php/Menu" role="button">Order Now</a></button>
            <a href="<?php echo base_url()?>index.php/Cart" class="btn btn-outline-danger ml-5 ">cart</a>
          </ul>
        </div>      
  </div>
</nav>
</header>  
<br><br>
<div class="container" style = " background-color: #3a100d; border:2px solid white;">
  <br>
  <h2>Shopping Cart</h2>    
  <br>   
  <table class="table">
    <thead>
      <tr style = " font-size:20px;  color: #C94617;">
        <th width="20%"></th>
        <th width="20%">Product</th>
        <th width="20%">Quantity</th>
        <th width="20%">Subtotal</th>
        <th width="20%"></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $item) { ?>
      <tr>
        <td><img src="<?php echo $item['hiddenImg']; ?>"  width="50" style="border-radius: 50%; " /></td>
        <td><?php echo $item['hiddenName'];?> 
        <p style = " font-size:12px; "><?php echo $item['size'];?><?php echo $item['toppingArray'];?></p></td>
        <td ><?php echo $item['quantity'];?></td>
        <td><?php echo $item['totalHidden']; ?></td>
        <td><a href="<?php echo site_url('/cart/removeItem/'.$item['hiddenId']); ?>"  ><i class="fa fa-trash-o" style="font-size:35px; color:darkred ;background-color:white; border-radius:30%"  ></i></a></td>
      </tr>
      <?php } ?>
    </tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td style = "color:#f5980c; font-size:20px;"><b>Total</b></td>
        <td style = " font-size:20px;">Rs.<?php echo $total?></td>
      </tr>
  </table>

    <div class="row">
      <div class="col-sm12 col-md-6">
        <a href = "<?php echo base_url()?>index.php/Menu" class=" btn-lg  btn  btn-block "style = " color:black;background: #C94617; border:2px solid black;" >Continue shopping</a>
      </div>
      <div class="col-sm-12 col-md-6 text-right">
        <a href = "<?php echo base_url()?>index.php/CheckOut" class=" btn-lg checkout btn  btn-block " style = " color:whitesmoke;background: #C94617;border:2px solid  black;">Checkout</a>
      </div>
    </div>
<br>
</div>
<br><br><br><br>
<footer>
<div id="wrapper">
    <div id="footer">
      <p> © Pizza Now . All rights reserved. Created by  </p> </div>
 </div>
</footer>
</body>
</html>
