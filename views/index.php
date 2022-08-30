<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/product.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Product</title>
</head>
<body>
    <section class = "row" id = "top-section">
          <div class = "col-lg-10" >
          <h3>Product Add</h3>
          </div>

          <div class = "col-lg-2">
                <input type="submit" name="createProduct" value="Save" id = "sub">
                <input type="reset" name="createProduct" value="Cancel" id = "cancel">
          </div>
          <hr>
    </section>
<!--  -->
<!--  -->
<!--  -->
<section class = "productform">

<div class="bg-dark text-light container" >
        <div class="form-group row" id = "form_section" >
        <form id = "product_form" class="" action="/PRODUCTAPP/controllers/productController.php" method="POST">
            <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
                <label for="SKU" >SKU</label>
                <input type="text" name="SKU" id="SKU" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="productName">Name</label>
                <input type="text" name="productName" id="productName" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="productType"> Product Type</label>
                <select class="form-control" type="text" name="productType" id="productType" aria-label="Default select example" required>
                    <option selected> Product Type</option>
                    <option value="dvd">
                       DVD
                    </option>

                    <option value="book">
                        Book
                    </option>

                    <option value="furniture">
                        Furniture
                    </option>
                    
                </select>
                 
            </div>
            </div>
       
            <div id="parent" class="col-sm-4">
                
                <div id="DVD" hidden="hidden">
                    <h1>DVD</h1>
                    <div class="form-group">
                        <label for="productName">Size &#40;MB&#41;</label>
                        <input type="text" name="size" id="productName" class="form-control"/>
                    </div>
                </div>
        
                <div id="Furniture" hidden ="hidden">
                    <h1>Furniture</h1>
                    <div class="form-group">
                        <label for="productName"> Height &#40;CM&#41;</label>
                        <input type="text" name="height" id="productName" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="productName"> Width &#40;CM&#41;</label>
                        <input type="text" name="width" id="productName" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="productName"> Length &#40;CM&#41;</label>
                        <input type="text" name="productLength" id="productName" class="form-control" />
                    </div>
                </div>

                <div id="Book" hidden="hidden">
                    <h1>Book</h1>
                    <div class="form-group">
                        <label for="productName"> Weight &#40;KG&#41;</label>
                        <input type="text" name="productWeight" id="productName" class="form-control" />
                    </div>
                </div>
                    

            </div>
            </div>
            <div>
                <input type="hidden" name="createProduct" >
                <!-- <button type="" type="submit" name="CreateProduct">Submit</button> -->
               
                
            </div>
            <br/>
        </form>
    </div>
            
        
    </div>
</section>
<hr>
<footer id = "foot">
    <p style = "text-align: center">Scandiweb Test Assignment</p>
</footer>
<script src = "../js/toggle.js"></script>
<script src = "../js/sub.js"></script>
    
</body>

</html>
