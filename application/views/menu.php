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
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/pizza_logo.png">
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
<h1 id="menu_h1">   Menu  </h1>
<div class="container">
    <ul class="nav-tabs nav nav-justified">
        <li class="nav-item">
            <a href="#pizza" class="navtab_active nav-link active" data-toggle="tab">Pizza</a>
        </li>
        <li class="nav-item">
            <a href="#appetizer" class="nav-link" data-toggle="tab">Appetizers</a>
        </li>
        <li class="nav-item">
            <a href="#beverage" class="nav-link" data-toggle="tab">Beverage</a>
        </li>
        <li class="nav-item">
            <a href="#desserts" class="nav-link" data-toggle="tab">Desserts</a>
        </li>
        <li class="nav-item">
            <a href="#deals" class="nav-link" data-toggle="tab">Deals</a>
        </li>
    </ul>
<br>
<div class="tab-content container">
    <div class="tab-pane active" id="pizza">
        <div class="row"> 
            <?php
            if (!is_null($pizza_items)) {
                foreach ($pizza_items as $pizza_item) {
                    component_pizza($pizza_item->productName,$pizza_item->price,$pizza_item->description,$pizza_item->productImage,$pizza_item->id);
                    
                }
            } else {
            echo 'No items found!';
            }
            ?> 
        </div> 
    </div>
    <div class="tab-pane " id="appetizer">
        <div class="row"> 
                <?php
                if (!is_null($appetizer_items)) {
                    foreach ($appetizer_items as $appetizer_item) {
                        component($appetizer_item->productName,$appetizer_item->productPrice,$appetizer_item->description,$appetizer_item->productImage,$appetizer_item->id);  
                    }
                } else {
                echo 'No items found!';
                }
                ?>     
        </div> 
    </div>
    <div class="tab-pane" id="beverage">
        <div class="row"> 
                <?php
                if (!is_null($beverage_items)) {
                foreach ($beverage_items as $beverage_item) {
                component($beverage_item->productName,$beverage_item->productPrice,$beverage_item->description,$beverage_item->productImage,$beverage_item->id);
                }
                } else {
                echo 'No items found!';
                }
                ?> 
        </div>
    </div> 
    <div class="tab-pane" id="desserts">
        <div class="row"> 
            <?php
                if (!is_null($dessert_items)) {
                foreach ($dessert_items as $dessert_item) {
                component($dessert_item->productName,$dessert_item->productPrice,$dessert_item->description,$dessert_item->productImage,$dessert_item->id);
                }
                } else {
                echo 'No items found!';
                }
                ?> 
        </div>
    </div>
    <div class="tab-pane" id="deals">
    <div class="row"> 
                <?php
                    if (!is_null($deal_items)) {
                    foreach ($deal_items as $deal_item) {
                    component($deal_item->productName,$deal_item->productPrice,$deal_item->description,$deal_item->productImage,$deal_item->id);
                    }
                    } else {
                    echo 'No items found!';
                    }
                    ?> 
            </div>
        </div>
</div>
</div>
<br><br>
<footer>
<div id="wrapper">
    <div id="footer">
      <p> © Pizza Now . All rights reserved. Created by </p> </div>
 </div>
</footer>

</body>
</html>