<?php
    include 'assets/my_DB.php';
    session_start();

    if (isset($_POST['review_btn'])) {
        $product_name = $_POST['product_name'];
        $pemesanan = $_POST['pemesanan'];
        $review = $_POST['review'];

        $email = $_SESSION['email'];
        $stmt = $conn->prepare("SELECT id, nama FROM user_form WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user_row = $result->fetch_assoc();
        $user_id = $user_row['id'];
        $user_name = $user_row['nama'];

        
        $increment_number = $conn->prepare("UPDATE testimoni SET number = number + 1 WHERE id = ?");
        $increment_number->bind_param("i", $user_id);
        $increment_number->execute();
        $increment_number->close();

        if ($result->num_rows > 0) {
            $testimoni = $conn->prepare("INSERT INTO testimoni (username, nama_barang, pemesanan, review) 
            VALUES (?, ?, ?, ?)");
            $testimoni->bind_param("ssss", $user_name, $product_name, $pemesanan, $review);
        

            if ($testimoni->execute()) {
                $_SESSION['message'] = "Review sent successfully!";
                $_SESSION['message_type'] = "success";

                $testimoni->close();
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($conn);
                $_SESSION['message_type'] = "error";
            }
        } else {
            $_SESSION['message'] = "User not found!";
            $_SESSION['message_type'] = "error";
        }

        $stmt->close();
        $conn->close();
        header("Location: testimoni.php");
        exit();
    }

?>
