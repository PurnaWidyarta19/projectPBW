<?php
    include 'assets/my_DB.php';
    session_start();

    if(isset($_POST['order_btn'])){
        $co_name = $_POST['co_name'];
        $co_email = $_POST['co_email'];
        $co_tlpn = $_POST['co_tlpn'];
        $co_address = $_POST['co_address'];
        $method = $_POST['method'];

        $email = $_SESSION['email'];
        $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        

        if($result->num_rows > 0){
            $user_row = $result->fetch_assoc();
            $user_id = $user_row['id'];

            $cart_order = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = $user_id");
            $product_names = array();
            $price_total = 0; 
    
            if(mysqli_num_rows($cart_order) > 0){
                while($product_item = mysqli_fetch_assoc($cart_order)){
                    $product_names[] = $product_item['name'] . ' (' . $product_item['quantity'] . ')';
                    $product_price = $product_item['price'] * $product_item['quantity'];
                    $price_total += $product_price; 
                }
            }

            $product_total = implode(', ', $product_names);

            $detail_query = mysqli_query($conn, "INSERT INTO cart_order (user_id, nama, email, tlpn, address, method, product_total, total_price) 
            VALUES ('$user_id', '$co_name', '$co_email', '$co_tlpn', '$co_address', '$method', '$product_total', '$price_total')") or die(mysqli_error($conn));

            // Output for debugging
            if ($detail_query) {
                echo "Data Inserted Successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        };

        if($cart_order && $detail_query){

            $email = $_SESSION['email'];
            $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                $user_row = $result->fetch_assoc();
                $user_id = $user_row['id'];

                $delete_cart_items = mysqli_query($conn, "DELETE FROM cart WHERE user_id = $user_id");

                if($delete_cart_items){
                    header('Location: home-login.php');
                    exit(); 
                } else {
                    header('Location: ur_cart.php?error=cart_empty_failed');
                    exit();
                }
            } else {
                header('Location: ur_cart.php?error=user_not_found');
                exit();
            }
        }
    }
?>