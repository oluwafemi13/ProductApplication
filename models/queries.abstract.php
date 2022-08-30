<?php

 abstract class queryfunction{

    public abstract function createProduct(string $productName, string $SKU, string $price,
                                        string $size, string $height, string $width, 
                                        string $productLength, string $productWeight, string $productType);


     public abstract function getProduct();
     public abstract function deleteProduct(array $productIds);
}
?>