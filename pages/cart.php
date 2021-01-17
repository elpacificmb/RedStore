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
    <?php if (!empty($_SESSION['shoppingCart'])): ?>
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

        <?php
        $subtotal = 0;
        $tax = 0;
        $total = 0;
        ?>
        
        <?php foreach($_SESSION['shoppingCart'] as $keys => $values) : ?>
      <tr>
        <td>
          <div class="cart-info">
            <img src="<?php echo $values['item_image1']; ?>" alt="<?php echo $values['item_name']; ?>">
            <div>
              <p><?php echo $values['item_name']; ?></p>
              <small>Price: $<?php echo $values['item_price']; ?></small>
              <a href="../core/process.php?action=delete&productID=<?php echo $values['item_id']; ?>">Remove</a>
            </div>
          </div>
        </td>
        <td><?php echo $values['item_quantity']; ?></td>
        <td>$<?php echo number_format($values['item_quantity'] * $values['item_price'], 2); ?></td>
      </tr>

    <?php
          $subtotal = $subtotal + ($values['item_quantity'] * $values['item_price']);
          $tax = ($subtotal * 18)/100;
          $total = $subtotal + $tax;
    ?>
        <?php endforeach; ?>
    </table>
    <div class="total-price">
      <table>

        <tr>
          <td>Subtotal</td>
          <td>$<?php echo number_format($subtotal, 2); ?></td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$<?php echo number_format($tax, 2); ?></td>
        </tr>
        <tr>
          <td>Total</td>
          <td>$<?php echo number_format($total, 2); ?></td>
        </tr>

      </table>
    </div>
    <?php endif ?>


  </div>
 
<!-- Footer -->
<?php

include 'footer.php';

?>
<!-- End Footer -->
  