<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/CSS/AllProducts.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Product</title>
</head>
<body>

<section class = "row" >
          <div class = "col-lg-8">
          <h3>Product List</h3>
          </div>

          <div class = "col-lg-4" id = "myButton">
                <!-- <input type="submit" name="createProduct" value="Add" id = "add"> -->
                <button onclick="window.location.href='/productapp/views/index.php'" id="add">Add</button>
                <button type="submit" id="delete-product-btn" onclick="document.getElementById('productListForm').submit();">Mass Delete</button>
          </div>
          <hr>
  </section>
<!--  -->
<!--  -->
<!--  -->

<div class="row bg-dark text-light">
<?php if(!empty($products)):?>
    <form class="form-group" action="/productapp/controllers/productController.php" method="POST" id="productListForm">
    <input type="hidden" name="deleteProduct">
        <div id="productList"> 
        <?php for($i=0; $i<count($products); $i++):?>
          <div class="productBox">
              <div class="form-group">
                  <input type="checkbox" class="delete-checkbox" name="product<?php echo $i?>" value="<?php echo($products[$i]["Id"]); ?>"/>
                  <section>
                      <?php echo($products[$i]["SKU"]);?>
                      <br>
                      <?php echo($products[$i]["ProductName"]);?>
                      <br>
                      <?php echo($products[$i]["Price"]);?>
                      <br>
                      <?php if($products[$i]["ProductType"] == "dvd"):?>
                      <?php echo($products[$i]["Size"]);?>
                      <?php elseif($products[$i]["ProductType"] =="book"):?>
                      <?php echo($products[$i]["ProductWeight"]);?>
                      <?php elseif($products[$i]["ProductType"] =="furniture"):?>
                      <?php echo($products[$i]["Height"]."x".$products[$i]["Width"]."x".$products[$i]["ProductLength"]);?>
                      <?php endif;?>
                      
                  </section>
              </div>
            </div>
        <?php endfor;?>
        </div>
        <input type="hidden" name="chechboxCount" value="<?php echo(count($products))?>"/>
    </form>
<?php endif;?>
</div>


<h1> <?php echo($message);?></h1>
<script src = "../js/sub.js"></script>
<hr>
<footer>
  Scandiweb Test Assignment
</footer>
</body>


</html>
