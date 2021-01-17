<?php

require_once 'database.php';

$productID=0;
$productSize = 'Select Size';

// Read data from Database
$sql = "SELECT * FROM product";

$result = $connection->query($sql) or die($connection->error);

// Product Details
if (isset($_GET['details'])){
  $productID = $_GET['details'];

  // SELECT SQL Query for READ
  $sql = "SELECT * FROM product WHERE productID=$productID";
  $result = $connection->query($sql) or die($connection->error());

  if ((!empty($result))){
    $product = $result->fetch_array();
    $productID = $product['productID'];
    $productName = $product['productName'];
    $productPrice = $product['productPrice'];
    $productDetails = $product['productDetails'];
    $productSize = $product['productSize'];
    $productImage1 = $product['productImage1'];
    $productImage2 = $product['productImage2'];
    $productImage3 = $product['productImage3'];
    $productImage4 = $product['productImage4'];
    $productImage5 = $product['productImage5'];
    $categoryName = $product['categoryName'];
    $productQuantity = $product['productQuantity'];
    $productPublished = $product['productPublished'];
    $productAddedDate = $product['productAddedDate'];
    $productEditedDate = $product['productEditedDate'];

  }
}

// Delete a Product
if (isset($_GET['delete'])){
  $productID = $_GET['delete'];

  // DELETE SQL Query
  $sql = "DELETE FROM product WHERE productID=$productID";
  $connection->query($sql) or die($connection->error());

  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = "danger";

  header("location: ../pages/productslist.php");
}

// Function for input test, prevent SQL injection
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Create or Insert a Product
if (isset($_POST['submit'])){
  $productName = test_input($_POST['productName']);
  $productPrice = test_input($_POST['productPrice']);
  $productDetails = $connection->real_escape_string(test_input($_POST['productDetails']));
  $productSize = ($_POST['productSize']);

  // image test
  $renameImage1 = rand(1111,9999);
  $renameImage2 = rand(1111,9999);
  $renameImage3 = $renameImage1.$renameImage2;
  $renameImage3 = md5($renameImage3);

  // Upload images
  $productImage1 = $_FILES['productImage1']['name'];
    $destinationImage11 = '../img/productsImages/'.$renameImage3.$productImage1;
    $destinationImage1 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage1;
    move_uploaded_file($_FILES['productImage1']['tmp_name'], $destinationImage11);
  $productImage2 = $_FILES['productImage2']['name'];
    $destinationImage21 = '../img/productsImages/'.$renameImage3.$productImage2;
    $destinationImage2 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage2;
    move_uploaded_file($_FILES['productImage2']['tmp_name'], $destinationImage21);
  $productImage3 = $_FILES['productImage3']['name'];
    $destinationImage31 = '../img/productsImages/'.$renameImage3.$productImage3;
    $destinationImage3 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage3;
    move_uploaded_file($_FILES['productImage3']['tmp_name'], $destinationImage31);
  $productImage4 = $_FILES['productImage4']['name'];
    $destinationImage41 = '../img/productsImages/'.$renameImage3.$productImage4;
    $destinationImage4 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage4;
    move_uploaded_file($_FILES['productImage4']['tmp_name'], $destinationImage41);
  $productImage5 = $_FILES['productImage5']['name'];
    $destinationImage51 = '../img/productsImages/'.$renameImage3.$productImage5;
    $destinationImage5 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage5;
    move_uploaded_file($_FILES['productImage5']['tmp_name'], $destinationImage51);

  $categoryName = test_input($_POST['categoryName']);
  $productQuantity = test_input($_POST['productQuantity']);
  $productPublished = test_input($_POST['productPublished']);

  // INSERT SQL Query for CREATE data record
  $sql = "INSERT INTO product (productName, productPrice, productDetails, productSize, productImage1, productImage2, productImage3, productImage4, productImage5, categoryName, productQuantity, productPublished) VALUES('$productName', '$productPrice', '$productDetails', '$productSize', '$destinationImage1', '$destinationImage2', '$destinationImage3', '$destinationImage4', '$destinationImage5', '$categoryName', '$productQuantity', '$productPublished')";

  $connection->query($sql) or die($connection->error);

  
  $_SESSION['message'] = "Record has been saved!";
  $_SESSION['msg_type'] = "success";

  header("location: ../pages/productslist.php");

}

// Update or Edit a Product
  // Dispay data in the form
if (isset($_GET['edit'])){
  $productID = $_GET['edit'];

  // SELECT SQL Query
  $sql = "SELECT * FROM product WHERE productID=$productID";
  $result = $connection->query($sql) or die($connection->error());

  if ((!empty($result))){
    $product = $result->fetch_array();
    $productID = $product['productID'];
    $productName = $product['productName'];
    $productPrice = $product['productPrice'];
    $productDetails = $product['productDetails'];
    $productSize = $product['productSize'];
    $productImage1 = $product['productImage1'];
    $productImage2 = $product['productImage2'];
    $productImage3 = $product['productImage3'];
    $productImage4 = $product['productImage4'];
    $productImage5 = $product['productImage5'];
    $categoryName = $product['categoryName'];
    $productQuantity = $product['productQuantity'];
    $productPublished = $product['productPublished'];
    $productAddedDate = $product['productAddedDate'];
    $productEditedDate = $product['productEditedDate'];

  }
}

    // Submit data from the form
if (isset($_POST['update'])){
  $productID = $_POST['productID'];

  $productName = test_input($_POST['productName']);
  $productPrice = test_input($_POST['productPrice']);
  $productDetails = $connection->real_escape_string(test_input($_POST['productDetails']));
  $productSize = test_input($_POST['productSize']);

  $productImage1old = $_POST['productImage1old'];
  $productImage2old = $_POST['productImage2old'];
  $productImage3old = $_POST['productImage3old'];
  $productImage4old = $_POST['productImage4old'];
  $productImage5old = $_POST['productImage5old'];

  // image test
  $renameImage1 = rand(1111,9999);
  $renameImage2 = rand(1111,9999);
  $renameImage3 = $renameImage1.$renameImage2;
  $renameImage3 = md5($renameImage3);

  // Upload images
  $productImage1 = $_FILES['productImage1']['name'];
  if((!empty($productImage1))){
    $destinationImage11 = '../img/productsImages/'.$renameImage3.$productImage1;
    $destinationImage1 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage1;
    move_uploaded_file($_FILES['productImage1']['tmp_name'], $destinationImage11);
  }else{
    $destinationImage1 =  $productImage1old;
  }

  $productImage2 = $_FILES['productImage2']['name'];
  if((!empty($productImage2))){
    $destinationImage21 = '../img/productsImages/'.$renameImage3.$productImage2;
    $destinationImage2 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage2;
    move_uploaded_file($_FILES['productImage2']['tmp_name'], $destinationImage21);
  }else{
    $destinationImage2 =  $productImage2old;
  }

  $productImage3 = $_FILES['productImage3']['name'];
  if((!empty($productImage3))){
    $destinationImage31 = '../img/productsImages/'.$renameImage3.$productImage3;
    $destinationImage3 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage3;
    move_uploaded_file($_FILES['productImage3']['tmp_name'], $destinationImage31);
  }else{
    $destinationImage3 =  $productImage3old;
  }

  $productImage4 = $_FILES['productImage4']['name'];
  if((!empty($productImage4))){
    $destinationImage41 = '../img/productsImages/'.$renameImage3.$productImage4;
    $destinationImage4 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage4;
    move_uploaded_file($_FILES['productImage4']['tmp_name'], $destinationImage41);
  }else{
    $destinationImage4 =  $productImage4old;
  }

  $productImage5 = $_FILES['productImage5']['name'];
  if((!empty($productImage5))){
    $destinationImage51 = '../img/productsImages/'.$renameImage3.$productImage5;
    $destinationImage5 = '/ShopStore/img/productsImages/'.$renameImage3.$productImage5;
    move_uploaded_file($_FILES['productImage5']['tmp_name'], $destinationImage51);
  }else{
    $destinationImage5 =  $productImage5old;
  }

  $categoryName = test_input($_POST['categoryName']);
  $productQuantity = test_input($_POST['productQuantity']);
  $productPublished = test_input($_POST['productPublished']);

  // UPDATE SQL Query
  $sql="UPDATE product SET productName = '$productName', productPrice = '$productPrice', productDetails = '$productDetails', productSize = '$productSize', productImage1 = '$destinationImage1', productImage2 = '$destinationImage2', productImage3 = '$destinationImage3', productImage4 = '$destinationImage4', productImage5 = '$destinationImage5', productEditedDate = current_timestamp(), categoryName = '$categoryName', productQuantity = '$productQuantity', productPublished = '$productPublished' WHERE productID = '$productID'";

  $connection->query($sql) or die($connection->error);

  $_SESSION['message'] = "Record has been updated!";
  $_SESSION['msg_type'] = "info";

  header("location: ../pages/productslist.php");
}

// initialize form variables
$username = "";
$email = "";
$errors = array();

// REGISTER
  // if register button is clicked
if (isset($_POST['register'])) {
  // retrieve data from form
  $username = $connection->real_escape_string($_POST['username']);
  $email = $connection->real_escape_string($_POST['email']);
  $password = $connection->real_escape_string($_POST['password']);
  $passwordconf = $connection->real_escape_string($_POST['passwordconf']);

  // ensure that form fields are filled properly
  if (empty($username)) {
    // add error to errors array
    array_push($errors, "Username is required"); 
  }
  if (empty($email)) {
    array_push($errors, "Email is required"); 
  }
  if (empty($password)) {
    array_push($errors, "Password is required"); 
  }

  if ($password != $passwordconf) {
    array_push($errors, "The Two Passwords do not match"); 
  }

  // check if username or email already exist in Db
  $sqlCheck = "SELECT * FROM user WHERE username='$username' OR useremail='$email' LIMIT 1";

  $resultCheck = $connection->query($sqlCheck) or die($connection->error);

  $userCheck = mysqli_fetch_assoc($resultCheck);

  if ($userCheck) {
    if ($userCheck['username'] === $username) {
      array_push($errors, "This username already exists"); 
    }
    if ($userCheck['email'] === $email) {
      array_push($errors, "This email has already a registered username"); 
    }
  }

  // if there are no errors, save user to database
  if (count($errors) == 0) {
    // encrypt password before storing in database
    $password = sha1($password);

    // INSERT data INTO the database
    $sqlCreate = "INSERT INTO user (username, useremail, userpassword) VALUES ('$username', '$email', '$password')";

    // execute the query to insert data
    $connection->query($sqlCreate) or die($connect->error);

    // Initialaze session
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    // Redirect user to the home page
    header('location: ../index.php');

  }

}

// LOGIN
if (isset($_POST['login'])) {
  // retrieve data from form
  $username = $connection->real_escape_string($_POST['username']);
  $password = $connection->real_escape_string($_POST['password']);

  // ensure that form fields are filled properly
  if (empty($username)) {
    // add error to errors array
    array_push($errors, "Username is required"); 
  }
  if (empty($password)) {
    array_push($errors, "Password is required"); 
  }

  // if there are no errors, verify user info in database
  if (count($errors) == 0) {
    // encrypt password before checking in database
    $password = sha1($password);

    // SELECT data FROM the database
    $sqlRead = "SELECT * FROM user WHERE username='$username' AND userpassword='$password'";

    // execute the query to retrieve data
    $result = $connection->query($sqlRead) or die($connection->error);

    // if data match
    if (mysqli_num_rows($result) == 1) {
      // log user in
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";

      header('location: ../index.php');
    }else {
      array_push($errors, "Wrong Username/Password combination");
    }

  }

}

// LOGOUT
if (isset($_GET['logout'])) {
  // destroy and unset the session
  session_destroy();
  unset($_SESSION['username']);

  // Redirect user to the login page
  header('location: ../pages/userlogin.php');
}

//  Add Item to Shopping Cart
if (isset($_POST['addToCart'])) {

  if(isset($_SESSION['shoppingCart'])) {
    $item_array_id = array_column($_SESSION['shoppingCart'], 'item_id');
    if (!in_array($_GET['productID'], $item_array_id)) {
      $count = count($_SESSION['shoppingCart']);
      $item_array = array (
        'item_id' => $_POST['productID'],
        'item_name' => $_POST['productName'],
        'item_price' => $_POST['productPrice'],
        'item_quantity' => $_POST['productQuantity'],
        'item_image1' => $_POST['productImage1']
      );
      $_SESSION['shoppingCart'][$count] = $item_array;

    }else {
      echo '<script>alert("Item Already Added")</script>';
      echo '<script>window.location="../index.php"</script>';
    }
  }else {
    $item_array = array (
      'item_id' => $_POST['productID'],
      'item_name' => $_POST['productName'],
      'item_price' => $_POST['productPrice'],
      'item_quantity' => $_POST['productQuantity'],
      'item_image1' => $_POST['productImage1']
    );
    $_SESSION['shoppingCart'][0] = $item_array;
  }

}

//  Remove Item from Shopping Cart
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'delete') {
    foreach($_SESSION['shoppingCart'] as $keys => $values) {
      if ($values['item_id'] == $_GET['productID']) {
        unset($_SESSION['shoppingCart'][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="../pages/cart.php"</script>';
      }
    }
  }
}

?>
