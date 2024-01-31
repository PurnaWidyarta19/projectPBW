<?php
    include 'assets/navbar_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya | Goprints</title>

    <link rel="stylesheet" href="css/pesanan_saya.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">
    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div class="container">
        <section class="shopping-cart">
            <h1>Pesanan Saya</h1>
            <table>
                <thead>
                    <th>Image</th>
                    <th>Produk</th>
                    <th>Total price</th>
                    <th>Payment Method</th>
                    <th>Proses</th>
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

                    $select_cart = mysqli_query($conn, "SELECT * FROM cart_order WHERE user_id = $user_id");
                    $total = 0;
                    if (mysqli_num_rows($select_cart) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                            ?>
                            <tr>
                                <td><img src="uploadImage/<?php echo $fetch_cart['image']; ?>"></td>
                                <td><?php echo $fetch_cart['product_total']; ?></td>
                                <td>Rp <?php echo number_format($fetch_cart['total_price']); ?></td>
                                <td><?php echo $fetch_cart['method'] ?></td>
                                <td><i class="fa-solid fa-check-to-slot"></i></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="5" style="font-weight: 800; padding: 50px 0;">Kamu belum checkout apapun</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>