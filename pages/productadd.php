<?php

require_once '../core/process.php';

// if user is not logged in, he cannot access this page
if (empty($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first to view this page";

  echo $_SESSION['msg'];

  header('location: userlogin.php');
}

?>

<!-- Header -->
<?php

include 'header.php';

?>
<!-- End Header -->


  <!-- Account Page -->
  <div class="account-page add-product">
    <div class="container">
      <div class="row">

          <div class="form-container">
            <!-- Add Product -->
            <h2>Add Product</h2>
            <div class="border"></div>

            <form action="../core/process.php" method="POST" name="productAddForm" enctype="multipart/form-data" onsubmit="return productForm()">

                <div class="form-group">
                    <!-- productID -->
                    <input type="number" disabled id="productID" name="productID" placeholder="Product ID is Auto-increment, and Disable" class="form-control">
                </div>

                <div class="form-group">
                  <!-- productName -->
                  <label for="productName">Product Name :</label>
                  <input type="text" id="productName" name="productName" placeholder="Enter Product Name" class="form-control">
                  <span id="productName1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productPrice-->
                    <label for="productPrice">Product Price :</label>
                    <input type="number" id="productPrice" name="productPrice" class="form-control">
                    <span id="productPrice1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productDetails -->
                    <label for="productDetails">Product Details :</label>
                    <textarea name="productDetails" id="productDetails" cols="30" rows="10" class="form-control"></textarea>
                    <span id="productDetails1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productSize -->
                    <label for="productSize">Product Size :</label>
                    <select name="productSize" id="productSize">
                      <option value="">Select Size</option>
                      <option value="XXL">XXL</option>
                      <option value="XL">XL</option>
                      <option value="Large">Large</option>
                      <option value="Medium">Medium</option>
                      <option value="Small">Small</option>
                    </select>
                    <span id="productSize1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productQuantity-->
                    <label for="productQuantity">Product Quantity :</label>
                    <input type="number" id="productQuantity" name="productQuantity" class="form-control" value="1">
                    <span id="productQuantity1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage1 -->
                    <label for="productImage1">Upload Product Image1 :</label>
                    <input type="file" id="productImage1" name="productImage1" required class="form-control">
                    <span id="productImage11" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage2 -->
                    <label for="productImage2">Upload Product Image2 :</label>
                    <input type="file" id="productImage2" name="productImage2" required class="form-control">
                    <span id="productImage21" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage3 -->
                    <label for="productImage3">Upload Product Image3 :</label>
                    <input type="file" id="productImage3" name="productImage3" class="form-control">
                    <span id="productImage31" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage4 -->
                    <label for="productImage4">Upload Product Image4 :</label>
                    <input type="file" id="productImage4" name="productImage4" class="form-control">
                    <span id="productImage41" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage5 -->
                    <label for="productImage5">Upload Product Image5 :</label>
                    <input type="file" id="productImage5" name="productImage5" class="form-control">
                    <span id="productImage51" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <!-- categoryName -->
                  <label for="categoryName">Category Name :</label>
                  <input type="text" id="categoryName" name="categoryName" placeholder="Enter Category Name" class="form-control">
                  <span id="categoryName1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productPublished -->
                    <label for="productPublished">Publish Product :</label><br>
                    <input type="radio" id="yes" name="productPublished" value="1" checked>
                    <label for="male">Publish</label><br>
                    <input type="radio" id="no" name="productPublished" value="0">
                    <label for="female">Not Publish</label>
                  </div>

                  <div class="form-group">
                    <!-- productAddedDate -->
                    <input type="text" disabled id="productAddedDate" name="productAddedDate" value="<?php echo date("m/d/y h:i:sa"); ?>"  class="form-control">
                  </div>
          
                <div class="form-group">
                  <input type="submit" value="Submit" class="btn" name="submit">
                </div>
            
              </form>

          </div>

      </div>
    </div>
  </div>

 <!-- Footer -->

  <!-- Js for Validation -->
  <script src="../js/formvalidation.js"></script>

<?php

include 'footer.php';

?>
<!-- End Footer -->
  