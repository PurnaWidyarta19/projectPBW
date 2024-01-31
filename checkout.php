<?php
    include 'assets/my_DB.php';
    include 'assets/navbar_login.php';
    session_start();
    if (!isset($_SESSION['email'])){
        header("Location: page-login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goprints | Proses Pemesanan </title>
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">
    
    <!-- ion icon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nonmodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <main class="container">
        <h1 class="heading">
            <ion-icon name="cart-outline"></ion-icon>Shopping Cart
        </h1>
        <form action="db_cart_order.php" method="post">
            <div class="item-flex">
                <section class="checkout">
                    <h2 class="section-heading">Payment Details</h2>
                    <div class="payment-form">
                        <div class="payment-method">
                            <buttton class="method selected">
                                <ion-icon name="card"></ion-icon>
                                <span>Payment Method</span>
                                <select name="method">
                                    <option value="qris">qris</option>
                                    <option value="ovo">ovo</option>
                                    <option value="link aja">link aja</option>
                                    <option value="dana">dana</option>
                                    <option value="cash on delivery">cash on delivery</option>
                                </select>    
                            </buttton>
                        </div>
                        <div class="cardholder-name">
                            <label for="cardholder-name" class="label-default">Nama</label>
                            <input type="text" name="co_name" id="co_name" class="input-default" required>
                        </div>
                        <div class="card-email">
                            <label for="cardholder-email" class="label-default">Email</label>
                            <input type="email" name="co_email" id="co_email" class="input-default" placeholder="" required>
                        </div>
                        <div class="card-number">
                            <label for="card-number" class="label-default">Tlpn</label>
                            <input type="number" name="co_tlpn" id="co_tlpn" class="input-default" placeholder="ex: 6285******" required>
                        </div>

                        <div class="card-adress">
                            <label for="card-adress" class="label-default">Alamat Lengkap</label>
                            <textarea id="co_address" name="co_address" rows="4" cols="50" class="input-default" placeholder="Enter your address here..." required></textarea>
                        </div>
                    </div>
                </section>

                <section class="cart">
                    <h2 class="section-heading">Order Summary</h2>
                    <?php

                        $email = $_SESSION['email'];
                        $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $user_row = $result->fetch_assoc();
                        $user_id = $user_row['id'];

                        $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = $user_id");
                        $grand_total = 0;
                        if (mysqli_num_rows($select_cart) > 0) {
                            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                                $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
                                $grand_total += $total_price;
                                ?>            
                                <div class="cart-item-box">
                                    <div class='product-card'>
                                        <div class='card'>
                                            <div class='img-box'>
                                                <img src="uploadImage/<?php echo $fetch_cart['image']; ?>" class='product-img' name="product-img" alt='' width='80px'>
                                            </div>
                                            <div class='detail'>
                                                <h4 class='product-name' name="product-name"><?php echo $fetch_cart['name']; ?></h4>
                                                <div class='wrapper'>
                                                    <div class='product-qty'>
                                                        <span class='quantity' name="quantity"><?php echo $fetch_cart['quantity']; ?></span>
                                                    </div>
                                                    <div class='price'>
                                                        Rp <span class='price' name="price"><?php echo number_format($fetch_cart['price']); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        }else{
                            echo '<div class="cart-item-box" style="text-align:center, font-weight:bold;">your cart is empty</div>';
                        }
                    ?>

                    <div class="wrapper">
                        <div class="amount">
                            <div class="total">
                                <span>Total</span><span>Rp <span id="total"><?= $grand_total; ?></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-order">
                        <input type="hidden" name="product_id" value="<?php echo $fetch_cart['product_id']; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $fetch_cart['user_id']; ?>">
                        <input type="submit" value="Order now" name="order_btn" class="btn btn-primary">
                    </div>
                </section>
            </div>
        </form>
    </main>
    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>