<?php
  session_start();
  include 'my_DB.php';

  // Retrieve the user ID from the session or wherever it is stored
  $userId = $_SESSION['user_id'];

  // Get the products data sent from the AJAX request
  $data = json_decode(file_get_contents('php://input'), true);
  $products = $data['products'];

  // Insert the products into the cart_order table
  foreach ($products as $product) {
    $productImg = $product['productImg'];
    $name = $product['name'];
    $price = $product['price'];

    // Perform the database query to insert the product into the cart_order table
    $insertQuery = "INSERT INTO cart (user_id, name, price, quantity, image) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    $quantity = 1; // Adjust the value as needed
    $image = ''; // Provide the image path or URL
    mysqli_stmt_bind_param($stmt, "isdis", $userId, $name, $price, $quantity, $image);
    mysqli_stmt_execute($stmt);
    header('location: home-login.php');
  }

  // Prepare the response
  $response = array('success' => true);
  echo json_encode($response);
?>
