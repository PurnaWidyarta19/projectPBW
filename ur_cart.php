<?php
    include 'assets/my_DB.php';

    if (isset($_POST['btn-update'])) {
        $update_id = $_POST['id_quantity'];
        $update_quantity = $_POST['update_quantity'];

        // Validasi nilai quantity
        if (filter_var($update_quantity, FILTER_VALIDATE_INT) !== false && $update_quantity >= 1) {
            $stmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
            $stmt->bind_param("ii", $update_quantity, $update_id);
            $result = $stmt->execute();

            if ($result) {
                header("Location: ur_cart.php");
                exit();
            } else {
                echo 'Error updating quantity: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            echo 'Quantity value is invalid';
        }
    }

    if (isset($_GET['remove'])) {
        $remove_id = filter_var($_GET['remove'], FILTER_VALIDATE_INT);
    
        if ($remove_id !== false && $remove_id >= 1) {
            $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
            $stmt->bind_param("i", $remove_id);
            $result = $stmt->execute();
    
            if ($result) {
                header("Location: ur_cart.php");
                exit();
            } else {
                echo 'Delete error: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            echo 'Invalid item ID';
        }
    }
    

    if (isset($_GET['delete_all'])) {
        $stmt = $conn->prepare("DELETE FROM cart");
        $result = $stmt->execute();
    
        if ($result) {
            header("Location: ur_cart.php");
            exit();
        } else {
            echo 'Delete all error: ' . $stmt->error;
        }
        $stmt->close();
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shopping Cart</title>
    
    <link rel="stylesheet" href="css/ur_cart.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">
    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <?php
        include 'assets/navbar_login.php';
    ?>
    <div class="container">
        <section class="shopping-cart">
            <h1>Shopping Cart</h1>
            <table>
                <thead>
                    <!-- <th>Choose Product</th> -->
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total price</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    <?php
                    $email = $_SESSION['email'];
                    $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $user_row = $result->fetch_assoc();
                    $user_id = $user_row['id'];

                    $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = $user_id");
                    $total = 0;
                    if (mysqli_num_rows($select_cart) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                            ?>
                            <tr>
                                <!-- <td>
                                    <input type="checkbox" name="selected_items[]" value="<?php echo $fetch_cart['id']; ?>">
                                </td> -->
                                <td><img src="uploadImage/<?php echo $fetch_cart['image'] ?>"></td>
                                <td><?php echo $fetch_cart['name']; ?></td>
                                <td>Rp <?php echo number_format($fetch_cart['price']); ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="id_quantity" min="1" value="<?php echo $fetch_cart['id']; ?>">
                                        <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                                        <input type="submit" value="update" name="btn-update">
                                    </form>
                                </td>
                                <td>Rp <?php
                                    $sub_total = 0;
                                    if (is_numeric($fetch_cart['quantity'])) {
                                        $sub_total = $fetch_cart['price'] * $fetch_cart['quantity'];
                                        echo number_format($sub_total);
                                    }?>
                                </td>
                                <td><a href="ur_cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="btn-del"><i class="fas fa-trash cart-remove"></i></a></td>
                        <?php
                                $total += $sub_total;
                            }
                        ?>
                        <?php
                        }else{
                            echo '<td colspan="6" style="font-weight: 800; padding: 50px 0;">your cart is empty!</td>';
                        }
                        ?>
                            </tr>
                    <tr>
                        <td><a href="home-login.php" class="btn-co">continu shopping</a></td>
                        <td colspan="3" style="font-weight: 800">Total</td>
                        <td style="font-weight: 800">Rp <?php echo $total ?></td>
                        <td><a href="ur_cart.php?delete_all" onclick="return confirm('yakin ingin menghapus semuanya?');" class="delete-all">Delete all</a></td>
                    </tr>
                </tbody>
            </table>
        
            <div class="checkout">
                <a href="checkout.php" onclick="return checkSelectedItems()" class="btn <?= ($total > 1) ? '' : 'disabled'; ?>">Checkout</a>
            </div>
        </section>
    </div>
    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>