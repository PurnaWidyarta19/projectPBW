<?php
    include 'assets/navbar_index.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goprints | Alat Tulis & Percetakan</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="assets/navbar_index.css">
    <link rel="stylesheet" href="assets/footer.css">

   <!-- Import Font Awesome untuk Icon -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
   integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
   crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
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
            <a href="page-login.php">Pemesanan</a>
        </div>
        <div class="content">
            <h1>Keunggulan<br><span>kami?</span></h1>
            <p>Dengan pelayanan yang cepat, proses yang mudah, dan sistem yang memudahkan pelanggan kami agar selalu dapat menjangkau kami
                kepercayaan pelanggan terhadap kami, adalah prioritas kami. Segera daftarkan diri anda disini
            </p>
            <a href="page-daftar.php">Daftar disini!</a>
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
                require 'db_searching_index.php';
            }
        ?>

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

                    <form action="" method="POST">
                        <div class="box">
                            <div class="box-img">
                                <img class="product-img" name="product-img" src="uploadImage/<?php echo $fetch_product['image_01']; ?>" alt="">
                            </div>
                            <div class="box-text">
                                <h3 class="product-title" name="product-name"><?php echo $fetch_product['name'];?></h3>
                                <div class="price-ikon">
                                    <div class="input-beda">
                                        <del class="delprice" name="delprice"><?php echo $fetch_product['delprice'];?></del>
                                        <p class="price" name="product-price">Rp <?php echo $fetch_product['price'];?></p>
                                    </div>
                                    <div class="icon" onclick="window.location.href='page-login.php'">
                                        <i class="fa-solid fa-cart-shopping add-cart"></i>
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
                <a href="see-more.php">See more ></a>
            </div>
        </div>
    </main>
    
    <?php
        include 'assets/footer.php';
    ?>
    <script type="text/javascript" src="js/liveSearch_index.js"></script>
    <script type="text/javascript" src="js/landing.js"></script>
</body>
</html>