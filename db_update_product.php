<?php
include 'assets/my_DB.php';
session_start();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $details = mysqli_real_escape_string($conn,$_POST['details']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    $delprice = mysqli_real_escape_string($conn,$_POST['delprice']);

    $update_product = $conn->prepare("UPDATE `products` SET name = ?, details = ?, delprice = IF(? = '', NULL, ?), price = ? WHERE id = ?");
    $update_product->bind_param('sssdii', $name, $details, $delprice, $delprice, $price, $id);
    $update_product->execute();

    $message[] = 'Product updated successfully!';

    $old_image_01 = $_POST['old_image_01'];
    $image_01 = mysqli_real_escape_string($conn,$_FILES['image_01']['name']);
    $image_size_01 = $_FILES['image_01']['size'];
    $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
    $image_folder_01 = 'uploadImage/'.$image_01;

    if (!empty($image_01)) {
        if ($image_size_01 > 2000000) {
            $message[] = 'Image size is too large!';
        } else {
            $update_image_01 = $conn->prepare("UPDATE `products` SET image_01 = ? WHERE id = ?");
            $update_image_01->bind_param('si', $image_01, $id);
            if ($update_image_01->execute()) {
                move_uploaded_file($image_tmp_name_01, $image_folder_01);
                unlink('uploadImage/'.$old_image_01);
                $message[] = 'Image 01 updated successfully!';
            } else {
                $message[] = 'Failed to update image 01!';
            }
        }
    }

    $_SESSION['message'] = $message; // Store the message in session

    header("Location: daftar_product.php"); // Redirect to daftar_product.php
    exit();
}
?>
