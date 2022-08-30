<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/productapp/models/dbconnect.class.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/productapp/models/queries.abstract.php";
    
    class Product extends queryfunction{
        private $db;
        public function __construct()
        {
            $db = new DBconnect();
            $this->db = $db->dbconn;
        }

        

        public function createProduct(string $productName, string $SKU, string $price,
                                        string $size, string $height, string $width, 
                                        string $productLength, string $productWeight, string $productType){
            try{
                $sql="INSERT INTO producttable (productName, SKU, price, size, height, width, productLength, productWeight, productType)VALUES(:productName, :SKU, :price, :size, :height, :width, :productLength, :productWeight, :productType)";
                
                $statement = $this ->db->prepare($sql);
                $statement ->bindParam(":productName", $productName);
                $statement ->bindParam(":SKU", $SKU);
                $statement ->bindParam(":price", $price);
                $statement ->bindParam(":size", $size);
                $statement ->bindParam(":height", $height);
                $statement ->bindParam(":width", $width);
                $statement ->bindParam(":productLength", $productLength);
                $statement ->bindParam(":productWeight", $productWeight);
                $statement ->bindParam(":productType", $productType);


                $statement->execute();
                return true;
            }catch(PDOException $ex){
                
                echo $ex->getMessage();
                return false;

            }
            

        }

        public function getProduct(){
            try{
                $sql="SELECT * FROM producttable";  
                $statement = $this ->db->prepare($sql);
                $statement->execute();
                $products = $statement->fetchAll(PDO::FETCH_ASSOC);
                
                return $products;
            }catch(PDOException $ex){
                
                echo $ex->getMessage();
                return false;

            }
         }

         public function deleteProduct(array $productIds){
            try{
                $arrayString = implode(",", $productIds);
                $arrayString = "(".$arrayString.")";
                $sql="DELETE FROM producttable WHERE id IN ".$arrayString; 
                $statement = $this ->db->prepare($sql);
                $statement->execute();
                return true;
            }catch(PDOException $ex){
                
                echo $ex->getMessage();
                return false;

            }
         }

        

    }
?>