<?php
    include 'assets/my_DB.php';
    include 'assets/navbar_login.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snwoman Spidol Giant Hitam | Goprints</title>
    <link rel="stylesheet" href="page-detail.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">

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
                    <a href="bantuan.html" target="_blank">Pusat Bantuan</a>
                    <div class="bantuan-list">
                        <a href="cara-pemesanan.html">Cara Pemesanan</a>
                        <a href="testimoni.html">Testimoni</a>
                        <a href="page-privasi.html">Syarat & Ketentuan</a>
                    </div>
                </div>
                <a href="order.html" target="_blank">Pemesanan</a>
            </div>
            <div class="nav-spacer"></div>
            <div class="nav-right">
                <div class="menu-profil">
                    <a href="akun"><i class="fa-solid fa-user"></i></a>
                    <div class="sub-menu">
                        <a href="../profil-saya.html" id="profile"><i class="fa-solid fa-user"></i>Profil Saya</a>
                        <a href="../daftar-pesanan"><i class="fa-solid fa-receipt"></i>Pesanan Saya</a>
                        <a href="index.html"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="header-containsrc-chart">
            <div class="gp" onclick="location.href='home-login.html'">
                <a href="#">
                    <div id="gp-img">
                        <img src="1-goprints-fix.png" alt="">
                    </div>
                </a>
            </div>
            <div class="kategori-icon">
                <a id="kategori"><i class="fa-sharp fa-light fa-grid-2">Kategori</i></a>
                <div class="kategori-list">
                    <a href="new-arrivals-login.html">New Arrivals</a>
                    <a href="off-sale-login.html">Off Sale</a>
                    <a href="see-more-login.html">All Product</a>
                    <a href="order.html">Pemesanan</a>
                </div>
            </div>
            <div class="src-box">
                <form action="">
                    <input type="text" class="serach-input" placeholder="Cari alat....">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="chart">
                <a href="#" onclick="Login()"><i class="fa-solid fa-cart-shopping"></i></a>
                <p>Belum ada produk</p>
            </div>
        </div>
    </div>

    <main>
        <div class="box-img">
            <div class="main-img">
                <img src="image/1-buku-tulis.jpeg" alt="" class="gambar-utama">
            </div>
            <div class="sub-img">
                <img src="image/1-buku-tulis.jpeg" alt="" class="gambar-1">
                <img src="image/1-buku-tulis.jpeg" alt="" class="gambar-2">
                <img src="image/1-buku-tulis.jpeg" alt="" class="gambar-3">
            </div>
        </div>

        <div class="desc-order">
            <div class="box-text">
                <div class="header">
                    <h2>BigBoss Buku Tulis 42 Lembar</h2>
                    <hr>
                </div>
                <div class="price">
                    <del></del>
                    <h4>Rp 30.000</h4>
                </div>
                <div class="deskripsi">
                    <p id="desc">Deskripsi</p>
                    <p>> Kertas tebal, putih, dan halus</p>
                    <p>> Nyaman untuk menulis</p>
                    <p>> Tidak tembus tinta</p>
                    <p>> Ukuran besar cocok untuk pelajar SMP dan SMA.</p>
                    <p>Merk: Buku Tulis BigBoss</p>
                    <p>Ukuran 250 x 180 mm</p>
                    <p>Kertas 70 GSM</p>
                    <p>Isi 6 buku/pak</p>
                    <hr>  
                </div>
            </div>
    
            <div class="action">
                <div class="chat">
                    <p><i class="fa-regular fa-message"></i>Hubungi Penjual</p>
                </div>
                <div class="toCart">
                    <p><i class="fa-solid fa-cart-plus"></i>Masukkan Keranjang</p>
                </div>
            </div>
        </div>
    </main>

    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>