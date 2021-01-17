<!-- <?php

//require_once 'core/process.php';

?> -->

<!-- Header -->
<?php

include 'iheader.php';

?>
<!-- End Header -->

  <!-- Featured Categories -->
  <div class="small-container">
    <div class="categories">

      <h2 class="title">Featured Categories</h2>
      <div class="row">
        <div class="col-3">
          <img src="img/category-1.jpg" alt="category-1">
        </div>
        <div class="col-3">
          <img src="img/category-2.jpg" alt="category-2">
        </div>
        <div class="col-3">
          <img src="img/category-3.jpg" alt="category-3">
        </div>
      </div>

    </div>
  </div>

  <!-- Featured Products -->
  <div class="small-container">
    <!-- Featured Products -->
    <h2 class="title">Featured Products</h2>
    <div class="row">

      <div class="col-4">
        <img src="img/product-1.jpg" alt="product-1">
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
        <img src="img/product-2.jpg" alt="product-2">
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
        <img src="img/product-3.jpg" alt="product-3">
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
        <img src="img/product-4.jpg" alt="product-4">
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

    <!-- Latest Products -->
    <h2 class="title">Latest Products</h2>

    <div class="row">

      <?php while($product = mysqli_fetch_assoc($result)) : ?>

      <div class="col-4">
        <a href="pages/productdetails.php?details=<?php echo $product['productID']; ?>"><img src="<?= $product['productImage1']; ?>" alt="<?= $product['productName']; ?>"></a>
        <h4><?= $product['productName']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-alt"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$<?= $product['productPrice']; ?></p>
        <a href="pages/productdetails.php?details=<?php echo $product['productID']; ?>" class="btn">Details</a>
      </div>

      <?php endwhile; ?>

    </div>
        <a href="pages/products.php" class="danger">View More &#8594;</a>
    
  </div>

  <!---------- Offer ---------->
  <div class="offer">
    <div class="small-container">
      <div class="row">

        <div class="col-2">
          <img src="img/exclusive.png" alt="exclusive" class="offer-img">
        </div>
        <div class="col-2">
          <p>
            Exclusively Avalaible on RedStore
          </p>
          <h1>Smart Band 4</h1>
          <small>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, voluptates soluta, porro perspiciatis necessitatibus cupiditate magnam odio, cumque ab ad nemo amet atque.
          </small>
          <a href="pages/cart.php" class="btn">Buy Now &#8594;</a>
        </div>

      </div>
    </div>
  </div>

  <!---------- Testimonial ---------->
  <div class="testimonial">
    <div class="small-container">

      <h2 class="title">Testimonial</h2>
      <div class="row">

        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nemo repellat cupiditate animi debitis reprehenderit porro quae veritatis, obcaecati voluptates doloremque! Soluta, asperiores rerum dolores hic nam impedit in facere!
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="img/user-4.png" alt="user-1">
          <h3>El Pacific Binagha</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nemo repellat cupiditate animi debitis reprehenderit porro quae veritatis, obcaecati voluptates doloremque! Soluta, asperiores rerum dolores hic nam impedit in facere!
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="img/user-2.png" alt="user-2">
          <h3>Chris Parker</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nemo repellat cupiditate animi debitis reprehenderit porro quae veritatis, obcaecati voluptates doloremque! Soluta, asperiores rerum dolores hic nam impedit in facere!
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="img/user-3.png" alt="user-3">
          <h3>Ellen James</h3>
        </div>

      </div>
    </div>
  </div>

  <!---------- Brands ---------->
  <div class="brands">
    <div class="small-container">
      <div class="row">

        <div class="col-5">
          <img src="img/logo-godrej.png" alt="logo-brand-1">
        </div>
        <div class="col-5">
          <img src="img/logo-oppo.png" alt="logo-brand-2">
        </div>
        <div class="col-5">
          <img src="img/logo-coca-cola.png" alt="logo-brand-3">
        </div>
        <div class="col-5">
          <img src="img/logo-paypal.png" alt="logo-brand-4">
        </div>
        <div class="col-5">
          <img src="img/logo-philips.png" alt="logo-brand-5">
        </div>

      </div>
    </div>
  </div>


<!-- Footer -->
<?php

include 'ifooter.php';

?>
<!-- End Footer -->
  