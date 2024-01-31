<?php
    include 'assets/my_DB.php';
    session_start();

    if (isset($_POST['add_to_cart'])) {
 
        $p_id = $_POST['product_id'];
        $p_name = $_POST['product-name'];
        $p_price = $_POST['product-price'];
        $p_image = $_POST['product-img'];
        $p_quantity = 1;

        $email = $_SESSION['email'];
        $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user_row = $result->fetch_assoc();
            $user_id = $user_row['id'];
        
            // Check if the product is already in the cart using prepared statements
            $stmt = $conn->prepare("SELECT id FROM cart WHERE product_id = ? and user_id =?");
            $stmt->bind_param("ii", $p_id, $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($stmt->error) {
                error_log("Error in query: " . $stmt->error);
            }
        
            if ($result->num_rows > 0) {
                $_SESSION['message'] = 'Product already added to cart';
                $_SESSION['message_type'] = "error";
                header('Location: home-login.php');

            } else {
                // Insert the product details into the cart table
                $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, name, price, quantity, image) 
                                        VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iisiis", $user_id, $p_id, $p_name, $p_price, $p_quantity, $p_image);
                if ($stmt->execute()) {
                    $_SESSION['message'] = 'Product added to cart successfully';
                    $_SESSION['message_type'] = "success";
                    header('Location: home-login.php');
                } else {
                    $_SESSION['message'] = 'Error adding product to cart: ' . $stmt->error;
                    $_SESSION['message_type'] = "error";
                    echo 'error2';
                    header('Location: home-login.php');
                }
            }
            $stmt->close();
        }
    }
?>
