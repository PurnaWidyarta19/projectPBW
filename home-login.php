<?php
    include 'assets/navbar_login.php';
    if (!isset($_SESSION['email'])){
        header("Location: page-login.php");
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goprints | Alat Tulis & Percetakan</title>
    
    <link rel="stylesheet" href="css/home-login.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">
    

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <?php 
        if (isset($_SESSION['message'])) {
            echo '<script>';
            echo 'let messageType = "' . $_SESSION['message_type'] . '";'; 
            echo 'let message = "' . $_SESSION['message'] . '";'; 
            echo 'alert(message);'; 
            echo '</script>';

            unset($_SESSION['message']); 
            unset($_SESSION['message_type']); 
        } 
    ?>

    <section class="home">
        <img class="landing-image" src="image/1-bcg.png" alt="">
        <img class="landing-image" src="image/background.jpeg" alt="">
        <img class="landing-image" src="image/1-bcg.png" alt="">
        <div class="content active">
            <h1>Welcome<br><span>to our website</span></h1>
            <p>Website ini menyediakan segala kebutuhanmu tentang ATK, mulai dari alat tulis seperti pensil, pena, buku, dls.
            </p>
            <a href="#">Explore More</a>
        </div>
        <div class="content">
            <h1>Kenapa<br><span>kami?</span></h1>
            <p>Kami menyediakan kemudahan bagi pelanggan yang ingin melakukan peroses percetakan dengan mudah,
                mulai dari mencetak tugas berwarna atau hitam putih, print dan fotocopy, semua ada disini
                akses melalui tombol di bawah ini
            </p>
            <a href="order.php">Pemesanan</a>
        </div>
        <div class="content">
            <h1>Keunggulan<br><span>kami?</span></h1>
            <p>Dengan pelayanan yang cepat, proses yang mudah, dan sistem yang memudahkan pelanggan kami agar selalu dapat menjangkau kami
                kepercayaan pelanggan terhadap kami, adalah prioritas kami. Enjoy your shipping :D
            </p>
            <a href="#">Enjoy!</a>
        </div>
        <div class="media-icons">
        <a href="https://web.facebook.com/purna.wid/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/purna_widyarta/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
            <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section>

    <main>
        <?php 
            if(isset($_POST['cari'])){
                require 'db_searching.php';
            }
        ?>
        <!-- <div class="main-title">
            <h2>New Arrivals</h2>
        </div> -->
        <!-- <div class="big-box">
        </div> -->

        <div class="main-title">
            <h2>All Products</h2>
        </div>
        <div class="big-box">
            <div class="card-row">
                <div id="searchproduct">
                    <?php
                        $select_products = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC LIMIT 4");
                        if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                    ?>

                    <form action="db_add_to_cart.php" method="POST">
                        <div class="box">
                            <div class="box-img">
                                <img class="product-img" name="product-img" src="uploadImage/<?php echo $fetch_product['image_01']; ?>" alt="">
                            </div>
                            <div class="box-text">
                                <h3 class="product-title" name="product-name"><?php echo $fetch_product['name'];?></h3>
                                <div class="price-ikon">
                                    <div class="input-beda">
                                        <?php if (!empty($fetch_product['delprice'])) { ?>
                                        <del class="delprice" name="delprice"><?php echo $fetch_product['delprice'];?></del>
                                        <?php } ?>
                                        <p class="price" name="product-price">Rp <?php echo $fetch_product['price'];?></p>
                                    </div>
                                    <div class="icon">
                                    <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                    <input type="hidden" name="product-name" value="<?php echo $fetch_product['name']; ?>">
                                    <input type="hidden" name="product-price" value="<?php echo $fetch_product['price']; ?>">
                                    <input type="hidden" name="product-img" value="<?php echo $fetch_product['image_01']; ?>">
                                        <button type="submit" name="add_to_cart" class="add-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                    <?php
                            };
                        };
                    ?>
                </div>
            </div>
            <div class="see-more">
                <a href="see-more-login.php">See more ></a>
            </div>
        </div>
    </main>
    <?php
        include 'assets/footer_login.php';
    ?>

    <script type="text/javascript" src="js/liveSearch.js"></script>

    <script type="text/javascript" src="js/landing.js"></script>

</body>
</html>