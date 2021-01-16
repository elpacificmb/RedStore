<?php

require_once '../core/process.php';

?>

<!-- Header -->
<?php

include 'header.php';

?>
<!-- End Header -->


  <!-- Account Page -->
  <div class="account-page">
    <div class="container">
      <div class="row">

        <div class="col-2">
          <img src="../img/image1.png" alt="account-image">
        </div>
        <div class="col-2">
          <div class="form-container">

            <div class="form-btn">
              <span onclick="register()">Register</span>
              <span onclick="login()">Login</span> 
              <hr id="indicator">
            </div>
                  <!-- Login -->
            <form action="userlogin.php" method="POST" id="loginForm">
                <!-- display validation errors here -->
                <?php include ('errors.php') ?>
                
              <input type="text" name="username" id="username1" placeholder="Username" value="<?php echo $username; ?>">
              <input type="password" name="password" id="password" placeholder="Password">
              <button type="submit" class="btn" name="login">Login</button>
              <a href="#">Forgot Password</a>
              <br>
              <p onclick="register()">Create an Account</p>
            </form>
                  <!-- Register -->
            <form action="userlogin.php" method="POST" id="regForm">
                <!-- display validation errors here -->
                <?php include ('errors.php') ?>

              <input type="text" name="username" id="username2" placeholder="Username" value="<?php echo $username; ?>">
              <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
              <input type="password" name="password" id="password1" placeholder="Password">
              <input type="password" name="passwordconf" id="password1conf" placeholder="Confirm Password">
              <button type="submit" class="btn" name="register">Register</button>
              <p onclick="login()">Login to your Account</p>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>

 <!-- Footer -->
<?php

include 'footer.php';

?>
<!-- End Footer -->
  