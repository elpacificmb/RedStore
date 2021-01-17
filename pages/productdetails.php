<?php

require_once '../core/process.php';

?>

<!-- Header -->
<?php

include 'header.php';

?>
<!-- End Header -->


  <!-- Single Product Details-->
  <div class="small-container single-product">
    <div class="row">


      <div class="col-2">
        <img src="<?= $product['productImage1']; ?>" alt="<?= $product['productName']; ?>" id="productImg">

        <div class="small-img-row">

          <div class="small-img-col">
            <img src="<?= $product['productImage1']; ?>" alt="gallery-1" class="small-img">
          </div>
          <div class="small-img-col">
            <img src="<?= $product['productImage2']; ?>" alt="gallery-2" class="small-img">
          </div>
          <div class="small-img-col">
            <img src="<?= $product['productImage3']; ?>" alt="gallery-3" class="small-img">
          </div>
          <div class="small-img-col">
            <img src="<?= $product['productImage4']; ?>" alt="gallery-4" class="small-img">
          </div>

        </div>
      </div>
      <div class="col-2">
      <form action="cart.php?action=add&productID=<?php echo $productID; ?>" method="POST">
        <input type="hidden" name="productID" value="<?php echo $productID; ?>">
        <p>Home / <?= $product['categoryName']; ?></p>
        <h1><?= $product['productName']; ?></h1>
        <h4>$<?= $product['productPrice']; ?></h4>
        <select name="size" id="size">
          <option value="<?php echo $productSize; ?>"><?php echo $productSize; ?></option>
          <option value="xxl">XXL</option>
          <option value="xl">XL</option>
          <option value="large">Large</option>
          <option value="medium">Medium</option>
          <option value="small">Small</option>
        </select>
        <input type="number" name="productQuantity" id="productQuantity" value="1">
        <input type="hidden" name="productName" id="productName" value="<?= $product['productName']; ?>">
        <input type="hidden" name="productPrice" id="productPrice" value="<?= $product['productPrice']; ?>">
        <input type="hidden" name="productImage1" id="productImage1" value="<?= $product['productImage1']; ?>">
        <input type="submit" value="Add To Cart" name="addToCart" class="btn">
        <!-- <a href="#" class="btn">Add To Cart</a> -->
        <h3>Product Details<i class="fa fa-indent"></i></h3>
        <br>
        <p>
        <?= $product['productDetails']; ?>
        </p>
      </form>
      </div>

    </div>

  </div>

  <!---- Related Products ---->
  <div class="small-container">
    <div class="row row-2">
      <h2>Related Products</h2>
      <p>View More</p>
    </div>
  </div>

  <!----Products ---->
  <div class="small-container">
    <div class="row">

      <div class="col-4">
        <img src="../img/product-1.jpg" alt="product-1">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="../img/product-2.jpg" alt="product-2">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="../img/product-3.jpg" alt="product-3">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="../img/product-4.jpg" alt="product-4">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
      </div>

    </div>
  </div>

 <!-- Footer -->

 <!-- Js for image -->
 <script src="../js/productdetails.js"></script>
 
<?php

include 'footer.php';

?>
<!-- End Footer -->
  