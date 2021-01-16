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

  <!-- Shopping Cart -->

  <div class="small-container cart-page">
    <!-- Cart Items Details-->

    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

      <tr>
        <td>
          <div class="cart-info">
            <img src="../img/buy-1.jpg" alt="buy-1">
            <div>
              <p>Red Printed T-Shirt</p>
              <small>Price: $50.00</small>
              <a href="#">Remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" name="itemNumber" id="itemNumber" value="1"></td>
        <td>$50.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="../img/buy-2.jpg" alt="buy-2">
            <div>
              <p>Red Printed T-Shirt</p>
              <small>Price: $40.00</small>
              <a href="#">Remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" name="itemNumber" id="itemNumber" value="1"></td>
        <td>$40.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="../img/buy-3.jpg" alt="buy-3">
            <div>
              <p>Red Printed T-Shirt</p>
              <small>Price: $75.00</small>
              <a href="#">Remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" name="itemNumber" id="itemNumber" value="1"></td>
        <td>$75.00</td>
      </tr>

    </table>
    <div class="total-price">
      <table>

        <tr>
          <td>Subtotal</td>
          <td>$165.00</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$35.00</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>$200.00</td>
        </tr>

      </table>
    </div>

  </div>
 
<!-- Footer -->
<?php

include 'footer.php';

?>
<!-- End Footer -->
  