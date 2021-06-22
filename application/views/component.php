<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Now</title>
    <link rel="shortcut icon" href="<?php echo base_url('/assets/images/pizza_logo.png') ?>">
</head>
<body>
<?php
function component_pizza($productName,$productPrice,$description,$productImage,$id){
    $card='<div class="col-lg-4 col-md-6  col-sm-12  product-grid">
                <div class="pizza_menu container" >
                    <div class="image">
                            <img src = "'.base_url().$productImage.'" class="h-300 w-300">
                    </div>
                    <br><br>
                    <h4 class="text-center">'.$productName.'</h4>
                    <h6 class="text-center">'.$description.'</h6>
                    <p class="text-right">Starting from Rs.'.$productPrice .'</p>
                    <form method = "POST" action ="'.base_url("/index.php/Customize/getId/").'">
                    <input type="hidden" name="id" value="'.$id.'">
                    <button class = " btn customize" type = "submit">Customize</button>
                    </form>
                </div>
            </div>';
echo $card;
}

function component($productName,$productPrice,$description,$productImage,$id){
    $card='<div class="col-lg-4 col-md-6  col-sm-12  product-grid">
                <form action="'.base_url().'index.php/Cart/getBuyingItems" method="POST">
                    <div class="pizza_menu container" >
                                <div class="image">
                                        <img src = "'.base_url().$productImage.'" class="h-300 w-300">  
                                </div>
                                <br><br>
                                <h4 class="text-center">'.$productName.'</h4>
                                <h6 class="text-center">'.$description.'</h6>
                                <p class="text-right">Price Rs.'.$productPrice.'</p>
                                <div class = "mb-12">
                                <label for="quantity" style=" color: white;margin: auto; display: block;" > Quantity: <input type="number" id="quantity" name="quantity"  min="1" value = "1" style="width: 50px; " > 
                                </label>
                                </div>
                                <button class="btn cart" type = "submit" ><i class="fa fa-shopping-cart"></i></button>

                                <input type = "hidden" id="hiddenId" name = "hiddenId" value = "' .$id. '">
                                        <input type = "hidden" id="hiddenImg" name = "hiddenImg" value = "' . base_url() . ($productImage) . '">
                                        <input type = "hidden" id="hiddenName" name = "hiddenName" value = "'.$productName.'">
                                        <input type = "hidden" id="hiddenDescription" name = "hiddenDescription" value = "'. $description.'">
                                        <input type = "hidden" id="totalHidden" name = "totalHidden" value = "'. $productPrice.'">
                    </div>
                </form>
            </div>';
echo $card;
}
?>
</body>
</html>





