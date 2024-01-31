<?php
    include 'my_DB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Goprints</title>

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div class="header-all">
        <nav>
            <div class="nav-left">
                <p class="follow">Ikuti kami di</p>
                <div class="follow-list">
                    <a href="https://web.facebook.com/purna.wid/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/purna_widyarta/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="bantuan">
                    <a href="#" onclick="toggleMenu()">Pusat Bantuan</a>
                    <div class="bantuan-list" id="pusatBantuan">
                        <a href="page-login.php">Cara Pemesanan</a>
                        <a href="page-login.php">Testimoni</a>
                        <a href="page-syarat.php">Syarat & Ketentuan</a>
                    </div>
                </div>
                <a href="page-login.php" class="order">Pemesanan</a>
            </div>
            <div class="nav-spacer"></div>
            <div class="nav-right">
                <a href="page-login.php" id="login">Masuk</a>
                <a href="page-daftar.php">Daftar</a>
            </div>
        </nav>

        <div class="header-containsrc-chart">
            <div class="gp" onclick="location.href='index.php'">
                <a href="#">
                    <div id="gp-img">
                        <img src="image/1-goprints-fix.png" alt="">
                    </div>
                </a>
            </div>
            <div class="kategori-icon">
                <a id="kategori"><i class="fa-sharp fa-light fa-grid-2" onclick="toggleMenu2()">Kategori</i></a>
                <div class="kategori-list" id="kategoriMenu">
                    <a href="see-more.php">All Product</a>
                    <a href="page-login.php">Pemesanan</a>
                </div>
            </div>
            <div class="src-box">
                <form action="" method="post">
                    <input type="text" id="keyword" name="keyword" class="serach-input" placeholder="Cari alat....">
                    <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="chart">
                <a href="page-login.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <p>Belum ada produk</p>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/toggle.js"></script>

</body>
</html>