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


  <!-- Edit Product Page -->
  <div class="account-page add-product">
    <div class="container">
      <div class="row">

          <div class="form-container">
            <!-- Add Product -->
            <h2>Edit Product</h2>
            <div class="border"></div>

            <form action="../core/process.php" method="POST" name="productAddForm" enctype="multipart/form-data" onsubmit="return productForm()">

                <div class="form-group">
                    <!-- productID -->
                    <input type="hidden" id="productID" name="productID" value="<?php echo $productID; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <!-- productName -->
                  <label for="productName">Product Name :</label>
                  <input type="text" id="productName" name="productName" value="<?php echo $productName; ?>" class="form-control">
                  <span id="productName1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productPrice-->
                    <label for="productPrice">Product Price :</label>
                    <input type="number" id="productPrice" name="productPrice" value="<?php echo $productPrice; ?>" class="form-control">
                    <span id="productPrice1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productDetails -->
                    <label for="productDetails">Product Details :</label>
                    <textarea name="productDetails" id="productDetails" cols="30" rows="10" class="form-control"><?php echo $productDetails; ?></textarea>
                    <span id="productDetails1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productSize -->
                    <label for="productSize">Product Size :</label>
                    <select name="productSize" id="productSize">
                      <option value="<?php echo $productSize; ?>"><?php echo $productSize; ?></option>
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
                    <input type="number" id="productQuantity" name="productQuantity" value="<?php echo $productQuantity; ?>" class="form-control">
                    <span id="productQuantity1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage1 -->
                    <label for="productImage1">Upload Product Image1 :</label>
                    <input type="file" id="productImage1" name="productImage1" value="<?php echo $productImage1; ?>" class="form-control">
                    <input type="hidden" id="productImage1" name="productImage1old" value="<?php echo $productImage1; ?>" class="form-control">
                    <span id="productImage11" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage2 -->
                    <label for="productImage2">Upload Product Image2 :</label>
                    <input type="file" id="productImage2" name="productImage2" value="<?php echo $productImage2; ?>" class="form-control">
                    <input type="hidden" id="productImage2" name="productImage2old" value="<?php echo $productImage2; ?>" class="form-control">
                    <span id="productImage21" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage3 -->
                    <label for="productImage3">Upload Product Image3 :</label>
                    <input type="file" id="productImage3" name="productImage3" value="<?php echo $productImage3; ?>" class="form-control">
                    <input type="hidden" id="productImage3" name="productImage3old" value="<?php echo $productImage3; ?>" class="form-control">
                    <span id="productImage31" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage4 -->
                    <label for="productImage4">Upload Product Image4 :</label>
                    <input type="file" id="productImage4" name="productImage4" value="<?php echo $productImage4; ?>" class="form-control">
                    <input type="hidden" id="productImage4" name="productImage4old" value="<?php echo $productImage4; ?>" class="form-control">
                    <span id="productImage41" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productImage5 -->
                    <label for="productImage5">Upload Product Image5 :</label>
                    <input type="file" id="productImage5" name="productImage5" value="<?php echo $productImage5; ?>" class="form-control">
                    <input type="hidden" id="productImage5" name="productImage5old" value="<?php echo $productImage5; ?>" class="form-control">
                    <span id="productImage51" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <!-- categoryName -->
                  <label for="categoryName">Category Name :</label>
                  <input type="text" id="categoryName" name="categoryName" value="<?php echo $categoryName; ?>" class="form-control">
                  <span id="categoryName1" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <!-- productPublished -->
                    <label for="productPublished">Publish Product :</label><br>
                      <?php if ($productPublished == 1): ?>
                    <input type="radio" id="yes" name="productPublished" value="1" checked>
                    <label for="male">Publish</label><br>
                    <input type="radio" id="no" name="productPublished" value="0">
                    <label for="female">Not Publish</label>
                      <?php else: ?>
                    <input type="radio" id="yes" name="productPublished" value="1">
                    <label for="male">Publish</label><br>
                    <input type="radio" id="no" name="productPublished" value="0" checked>
                    <label for="female">Not Publish</label>
                      <?php endif; ?>
                  </div>

                  <div class="form-group">
                    <!-- productAddedDate -->
                    <input type="text" id="productAddedDate" name="productAddedDate" value="<?php echo date("m/d/y h:i:sa"); ?>" disabled class="form-control">
                  </div>

                  <div class="form-group">
                    <!-- productEditedDate -->
                    <input type="hidden" id="productEditedDate" name="productEditedDate" value="<?php echo date("m/d/y h:i:sa"); ?>" disabled class="form-control">
                  </div>
          
                <div class="form-group">
                  <input type="submit" value="Update" class="btn" name="update">
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
  