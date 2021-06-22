<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit-=cover">
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Pizza Now</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/pizza_logo.png') ?>">
  <style>
    p {
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
            <li class="nav-item"><a href="<?php echo base_url() ?>index.php/Home" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="<?php echo base_url() ?>index.php/AboutUs" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="<?php echo base_url() ?>index.php/ContactUs" class="nav-link">Contact Us</a></li>
            <li class="nav-item"><a href="<?php echo base_url() ?>index.php/TermsAndConditions" class="nav-link">Terms and Conditions </a></li>
            <button> <a href="<?php echo base_url() ?>index.php/Menu" role="button"> Order Now </a></button>
            <a href="<?php echo base_url()?>index.php/Cart" class="btn btn-outline-danger ml-3">cart</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6  col-sm-12 product-grid">
        <form action="<?php echo base_url() ?>index.php/Cart/getBuyingPizza" method="POST">
          <div class="select_pizza container">
            <?php
            if (!is_null($pizza_items)) {
              foreach ($pizza_items as $pizza_item) {
                echo ' <div class="image"><img  src = "' . base_url() . ($pizza_item->productImage) . '" class="center" style="margin: auto; display: block;border-radius: 50%;"></div>
                      <br><br>
                      <h4 class="text-center">' . $pizza_item->productName . '</h4> 
                      <h5 style="font-weight: bold; color: rgb(168, 159, 159); "class = "text-center" id="pizzaSize"></h5>
                      <h6 class="text-center">' . $pizza_item->description . '</h6><br>
                      <h5 class = "text-center" style="font-weight: bold;
                      color: #C94617 ;" id = "extra"> Add Extra Toppings to have more flavour!</h5>
                      <p class = "text-center" id="pizzaToppings1"></p>
                      <p class = "text-center" id="pizzaToppings2"></p>
                      <p class = "text-center" id="pizzaToppings3"></p>
                      <div class = "row">
                      <label for="quantity" style=" color:whitesmoke ;margin: auto; display: block;" > Quantity :</label><input type="number" id="quantity" name="quantity"  min="1" value = "1" style="width: 50px;margin: auto; display: block;" > 
                      </div>
                      <br>
                      <p class = "text-center" id="total" name="total" ></p>
                      <input type = "hidden" id="totalHidden" name = "totalHidden">
                      <button class="btn cart" type="submit" id="cart"><i class="fa fa-shopping-cart"></i></button></div>
                      <input type = "hidden" id="toppingArray" name = "toppingArray" >
                      <input type = "hidden" id="hiddenId" name = "hiddenId" value = "' . $pizza_item->id . '">
                      <input type = "hidden" id="hiddenImg" name = "hiddenImg" value = "' . base_url() . ($pizza_item->productImage) . '">
                      <input type = "hidden" id="hiddenName" name = "hiddenName" value = "' . $pizza_item->productName . '">
                      <input type = "hidden" id="hiddenDescription" name = "hiddenDescription" value = "' . $pizza_item->description . '">
                      <input type = "hidden" id="size" name = "size" >
                      <input type = "hidden" id="hiddenCheese" name = "hiddenCheese" >
                      <input type = "hidden" id="hiddenOnion" name = "hiddenOnion" >
                      <input type = "hidden" id="hiddenOlives" name = "hiddenOlives">
                      <input type = "hidden" id="hiddenQuantityTotal" name = "hiddenQuantityTotal"
                      ';
              }
            } else {
              echo 'No items found!';
            }
            ?>

          </div>
        </form>
      </div>

      <div class="col-lg-6 col-md-6  col-sm-12 sizeGrid">

        <div class="sizeSelect container">
          <a class="btn sizebtn" data-toggle="collapse" href="#showContent" role="button" aria-expanded="false" aria-controls="showContent">
            Please Select Size
          </a>
          <div class="sizeCollapse collapse" id="showContent">
            <div class="card card-body">
              <p>
                <?php
                if (!is_null($size_pizza_items)) {
                  foreach ($size_pizza_items as $size_pizza_item) {
                    echo ' <div class ="container">
                          <input type="hidden" id = "selectedId" name = "selectedId" value="' . $size_pizza_item->id . '"></input>
                            <button type = "submit" value  = "' . $size_pizza_item->size_option_name . '" id = "' . $size_pizza_item->size_option_name . '" name = "' . $size_pizza_item->size_option_name . '" class="sizecustom btn">' . $size_pizza_item->size_option_name . '</button>
                        </div>';
                  }
                } else {
                  echo 'No items found!';
                }
                ?>
              </p>
            </div>
          </div>
        </div>

        <a class="btn sizebtn" data-toggle="collapse" href="#extrashowContent" role="button" aria-expanded="false" aria-controls="extrashowContent">
          Add Something Extra
        </a>

        <div class="sizeCollapse collapse" id="extrashowContent">
          <div class="card card-body">
            <div class="row">

              <?php
              if (!is_null($toppings)) {
                foreach ($toppings as $topping) {
                  echo ' <div class="col-lg-4 col-md-6  col-sm-12  toppingGrid">
                      <input type="hidden" id = "selectedId" name = "selectedId" value="' . $topping->id . '"></input>
                      <button class = "toppings btn " value  = "' . $topping->toppingName . '" id = "' . $topping->toppingName . '" name = "' . $topping->toppingName . '" type = "submit" tabindex="1" onclick="changeText()">  
                      <img src = "' . base_url() . ($topping->toppingImage) . '" class="h-50 w-100">
                      <br><br>
                      <h6 class="text-center">' . $topping->toppingName . '</h6>
                      <p class="text-center">Price Rs.' . $topping->toppingPrice . '</p>
                      </button> 
                      </div>';
                }
              } else {
                echo 'No items found!';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div id="wrapper">
      <div id="footer">
        <p> © Pizza Now . All rights reserved. Created by Pillenththu Thejana 2017201 w1673712</p>
      </div>
    </div>
  </footer>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#Personal').click(function() {
        var size = $("#Personal").val();
        var id = document.getElementById('selectedId').value;
        document.getElementById("extra").innerHTML = "Add Extra Toppings to have more flavour!"
        document.getElementById("pizzaToppings1").innerHTML = "";
        document.getElementById("pizzaToppings2").innerHTML = "";
        document.getElementById("pizzaToppings3").innerHTML = "";
        document.getElementById("totalHidden").value = 0;
        document.getElementById("total").innerHTML = 0;
        $.ajax({
          url: "<?php echo base_url('index.php/Customize/getPrice'); ?>",
          method: "POST",
          data: {
            size: size,
            id: id
          },
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            var price;
            for (i = 0; i < data.length; i++) {
              html += data[i].size_option_name + "  Rs." + data[i].price;
              price = data[i].price;
            }
            $('#pizzaSize').html(html);
            document.getElementById("total").innerHTML = "Total : Rs. "+price;
            document.getElementById("totalHidden").value = price;
            document.getElementById("size").value = "Personal";
          }
        });
        return false;
      });

      $('#Medium').click(function() {
        var size = $("#Medium").val();
        var id = document.getElementById('selectedId').value;
        document.getElementById("extra").innerHTML = "Add Extra Toppings to have more flavour!"
        document.getElementById("pizzaToppings1").innerHTML = "";
        document.getElementById("pizzaToppings2").innerHTML = "";
        document.getElementById("pizzaToppings3").innerHTML = "";
        document.getElementById("totalHidden").value = 0;
        document.getElementById("total").innerHTML = 0;
        $.ajax({
          url: "<?php echo base_url('index.php/Customize/getPrice'); ?>",
          method: "POST",
          data: {
            size: size,
            id: id
          },
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            var price;
            for (i = 0; i < data.length; i++) {
              html += data[i].size_option_name + "  Rs." + data[i].price;
              price = data[i].price;
            }
            $('#pizzaSize').html(html);
            document.getElementById("total").innerHTML = "Total : Rs. "+price;
            document.getElementById("totalHidden").value = price;
            document.getElementById("size").value = "Medium";
          }
        });
        return false;
      });

      $('#Large').click(function() {
        var size = $("#Large").val();
        var id = document.getElementById('selectedId').value;
        document.getElementById("extra").innerHTML = "Add Extra Toppings to have more flavour!"
        document.getElementById("pizzaToppings1").innerHTML = "";
        document.getElementById("pizzaToppings2").innerHTML = "";
        document.getElementById("pizzaToppings3").innerHTML = "";
        document.getElementById("totalHidden").value = 0;
        document.getElementById("total").innerHTML = 0;
        $.ajax({
          url: "<?php echo base_url('index.php/Customize/getPrice'); ?>",
          method: "POST",
          data: {
            size: size,
            id: id
          },
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            var price;
            for (i = 0; i < data.length; i++) {
              html += data[i].size_option_name + "  Rs." + data[i].price;
              price = data[i].price;
            }
            $('#pizzaSize').html(html);
            document.getElementById("total").innerHTML = "Total : Rs. "+price;
            document.getElementById("totalHidden").value = price;
            document.getElementById("size").value = "Large";
          }
        });
        return false;
      });

      $('#Cheese').click(function() {
        var topping = $("#Cheese").val();
        var id = document.getElementById('selectedId').value;
        $.ajax({
          url: "<?php echo base_url('index.php/Customize/getToppingsPrice'); ?>",
          method: "POST",
          data: {
            topping: topping,
            id: id
          },
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            var price;

            for (i = 0; i < data.length; i++) {
              html += data[i].toppingName + "  Rs." + data[i].toppingPrice;
              price = data[i].toppingPrice;
            }
            $('#pizzaToppings1').html(html);
             var total = document.getElementById("totalHidden").value;
             var hiddenCheeseCheck = document.getElementById("hiddenCheese").value;
             var tArray = document.getElementById("toppingArray").value;
             if (hiddenCheeseCheck ==""){
                var amount = parseFloat(total) + parseFloat(price);

                document.getElementById("hiddenCheese").value = price;
                document.getElementById("totalHidden").value = amount;
                document.getElementById("total").innerHTML = "Total : Rs. "+amount;
                document.getElementById("toppingArray").value = tArray + ',Cheese';
             }


          }
        });
        return false;
      });

      $('#Onion').click(function() {
        var topping = $("#Onion").val();
        var id = document.getElementById('selectedId').value;
        $.ajax({
          url: "<?php echo base_url('index.php/Customize/getToppingsPrice'); ?>",
          method: "POST",
          data: {
            topping: topping,
            id: id
          },
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            var price;
            var toppingName;
            for (i = 0; i < data.length; i++) {
              html += data[i].toppingName + "  Rs." + data[i].toppingPrice;
              price = data[i].toppingPrice;
            }
            $('#pizzaToppings2').html(html);

            var total = document.getElementById("totalHidden").value;
             var hiddenCheeseCheck = document.getElementById("hiddenOnion").value;
             var tArray = document.getElementById("toppingArray").value;
             if (hiddenCheeseCheck ==""){
                var amount = parseFloat(total) + parseFloat(price);

                document.getElementById("hiddenOnion").value = price;
                document.getElementById("totalHidden").value = amount;
                document.getElementById("total").innerHTML = "Total : Rs. "+amount;
                document.getElementById("toppingArray").value = tArray + ',Onion';
             }
          }
        });
        return false;
      });
      $('#Olives').click(function() {
        var topping = $("#Olives").val();
        var id = document.getElementById('selectedId').value;
        $.ajax({
          url: "<?php echo base_url('index.php/Customize/getToppingsPrice'); ?>",
          method: "POST",
          data: {
            topping: topping,
            id: id
          },
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            var price;
            var toppingName;
            for (i = 0; i < data.length; i++) {
              html += data[i].toppingName + "  Rs." + data[i].toppingPrice;
              price = data[i].toppingPrice;
            }
            $('#pizzaToppings3').html(html);

            var total = document.getElementById("totalHidden").value;
             var hiddenCheeseCheck = document.getElementById("hiddenOlives").value;
             var tArray = document.getElementById("toppingArray").value;
             if (hiddenCheeseCheck ==""){
                var amount = parseFloat(total) + parseFloat(price);
                document.getElementById("hiddenOlives").value = price;
                document.getElementById("totalHidden").value = amount;
                document.getElementById("total").innerHTML = "Total : Rs. "+amount;
                document.getElementById("toppingArray").value = tArray + ',Olives';
             }
          }
        });
        return false;
      });

    });

    $('#quantity').on("change", function(event) {
          newValue = $('#quantity').val();
          var total = document.getElementById("totalHidden").value;
          var amount = parseFloat(total)*parseFloat(newValue);
          document.getElementById("total").innerHTML = "Total : Rs. "+amount;
          document.getElementById("hiddenQuantityTotal").value = amount;
    });


    function changeText() {
      document.getElementById("extra").innerHTML = "Extra Toppings";
    }

  </script>


</body>

</html>