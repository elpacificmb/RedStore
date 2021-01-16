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

<!-- Successfull login message -->
<div class="small-container">

<?php if (isset($_SESSION['success'])): ?>
  <div class="error success">
    <?php
      echo $_SESSION['success'];
      unset($_SESSION['success']);
    ?>
  </div>
<?php endif ?>

<?php if (isset($_SESSION['username'])): ?>
  <p>Welcome <strong> 
    <?php echo $_SESSION['username']; ?> 
  </strong></p>
<?php endif ?>

</div>
<!-- End Successfull login message -->

  <!-- Admin Products -->

  <div class="small-container cart-page product-list">

    <!-- Shorting Products Option -->
    <div class="row row-2">
      <h2>All Products</h2>
      <a href="productadd.php" class="btn-danger">Add New Product</a>
      <select name="shorting" id="shorting">
        <option value="short1">Default Shorting</option>
        <option value="short2">Short by Price</option>
        <option value="short3">Short by Popularity</option>
        <option value="short4">Short by Rating</option>
        <option value="short5">Short by Sale</option>
      </select>
    </div>

<!-- Warning Message-->
<?php
if (isset($_SESSION['message'])):?>

<div class=" container alert-<?=$_SESSION['msg_type']?>">
  <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  ?>
</div>
<?php endif ?>

    <!-- Products Admin view-->
    <div class="row">

    <table>
      <tr>
        <th><input type="checkbox" name="" id=""></th>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Rating</th>
        <th>Published</th>
        <th colspan="2">Action</th>
      </tr>

      <?php while($product = mysqli_fetch_assoc($result)) : ?>

      <tr>
        <td><input type="checkbox" name="" style="  display: inline-block; width: 15px; height: 15px; padding: 2px;"></td>
        <td><?php echo $product['productID']; ?></td>
        <td>
          <div class="cart-info">
            <img src="<?php echo $product['productImage1']; ?>" alt="<?php echo $product['productName']; ?>">
          </div>
        </td>
        <td><?php echo $product['productName']; ?></td>
        <td>$<?php echo $product['productPrice']; ?></td>
        <td><?php echo $product['categoryName']; ?></td>
        <td><?php echo $product['productQuantity']; ?></td>
        <td>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
            <i class="fa fa-star-o"></i>
          </div>
        </td>
        <td>
          <div class="success">
            <i class="fa fa-check" aria-hidden="true"></i>
          </div>
        </td>
        <td>
        <a href="productdetails.php?details=<?php echo $product['productID']; ?>" class="btn-info">Details</a>
          <a href="productedit.php?edit=<?php echo $product['productID']; ?>" class="btn-success">Edit</a>
          <a href="../core/process.php?delete=<?php echo $product['productID']; ?>" class="btn-danger">Delete</a>
        </td>
      </tr>

      <?php endwhile; ?>

    </table>

    </div>

    <!-- Multi Page Products Option -->
    <div class="page-btn" style="margin-top: 20px;">
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
  