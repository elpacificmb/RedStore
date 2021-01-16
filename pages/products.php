<?php

require_once '../core/process.php';

?>

<!-- Header -->
<?php

include 'header.php';

?>
<!-- End Header -->

  <!-- Products -->
  <div class="small-container">
    
    <!-- Shorting Products Option -->
    <div class="row row-2">
      <h2>All Products</h2>
      <select name="shorting" id="shorting">
        <option value="short1">Default Shorting</option>
        <option value="short2">Short by Price</option>
        <option value="short3">Short by Popularity</option>
        <option value="short4">Short by Rating</option>
        <option value="short5">Short by Sale</option>
      </select>
    </div>

    <div class="row">

      <?php while($product = mysqli_fetch_assoc($result)) : ?>

      <div class="col-4">
        <a href="productdetails.php?details=<?php echo $product['productID']; ?>"><img src="<?= $product['productImage1']; ?>" alt="<?= $product['productName']; ?>"></a>
        <h4><?= $product['productName']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$<?= $product['productPrice']; ?></p>
        <a href="productdetails.php?details=<?php echo $product['productID']; ?>" class="btn">Details</a>
      </div>

      <?php endwhile; ?>

    </div>

    <!-- Multi Page Products Option -->
    <div class="page-btn">
      <span>1</span>
      <span>2</span>
      <span>3</span>
      <span>4</span>
      <span>&#8594;</span>
    </div>

  </div>

<!-- Footer -->
<?php

include 'footer.php';

?>
<!-- End Footer -->
  