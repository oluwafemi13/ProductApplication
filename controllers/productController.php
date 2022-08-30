<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/productapp/models/product.class.php";
   if(isset($_POST["createProduct"]) ){
    
    $productName =isset($_POST["productName"])?htmlspecialchars($_POST["productName"]):" ";
    $SKU =isset($_POST["SKU"])?htmlspecialchars($_POST["SKU"]):" ";
    $price =isset($_POST["price"])?htmlspecialchars($_POST["price"]):" ";
    $size =isset($_POST["size"])?htmlspecialchars($_POST["size"]):" ";
    $height =isset($_POST["height"])?htmlspecialchars($_POST["height"]):" ";
    $width =isset($_POST["width"])?htmlspecialchars($_POST["width"]):" ";
    $productLength =isset($_POST["productLength"])?htmlspecialchars($_POST["productLength"]):" ";
    $productWeight =isset($_POST["productWeight"])?htmlspecialchars($_POST["productWeight"]):" ";
    $productType =isset($_POST["productType"])?htmlspecialchars($_POST["productType"]):" ";
    
    $product = new Product();

    if($result = $product ->createProduct($productName, $SKU,$price,
                                         $size, $height, $width, 
                                         $productLength, $productWeight, $productType)){

            
            $message = "product created successfully";
                header("Location: /productapp/controllers/productController.php?getProduct");
                exit;
        
     }
     echo("failed");
   }

   if(isset($_GET["getProduct"]) ){
       
    $product = new Product;
    
    $message = "Product Fetched Successfully";
    if(!$products = $product->getProduct()){
        $message = "No product found";
        
        
    }
   
   
    require_once $_SERVER["DOCUMENT_ROOT"]."/productapp/views/AllProduct.html.php";
    exit;
    
   }


   if(isset($_POST["deleteProduct"]) ){
    $checkboxCount = $_POST["chechboxCount"];
    $productIds = [];
    for($i=0; $i<$checkboxCount; $i++){
        if(isset($_POST["product".$i])){ 
            array_push($productIds,$_POST["product".$i]);
        }
    }
    $product = new Product;
    if($product->deleteProduct($productIds)){

        $message = "Product deleted Successfully";
        header("Location: /productapp/controllers/productController.php?getProduct");
        exit;
    }
    echo("product not Deleted");
    exit;

   }

?>