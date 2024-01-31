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
    <title>Faber Castell Connector Pens 10'S | Goprints</title>
    <link rel="stylesheet" href="page-detail.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <main>
        <div class="box-img">
            <div class="main-img">
                <img src="image/1-fabercastel-10's.jpg" alt="" class="gambar-utama">
            </div>
            <div class="sub-img">
                <img src="image/1-fabercastel-10's.jpg" alt="" class="gambar-1">
                <img src="" alt="" class="gambar-2">
                <img src="" alt="" class="gambar-3">
            </div>
        </div>

        <div class="desc-order">
            <div class="box-text">
                <div class="header">
                    <h2>Faber Castell Connector Pens 10'S</h2>
                    <hr>
                </div>
                <div class="price">
                    <del>Rp 26.900</del>
                    <h4>Rp 20.000</h4>
                </div>
                <div class="deskripsi">
                    <p id="desc">Deskripsi</p>
                    <p>Pensil warna ini dapat digabung-gabungkan agar tidak hilang, Tidak beracun, 
                       aman untuk anak-anak dan disertai dengan warna-warna yang cerah.</p>
                    <p>Merk: Fabercastel</p>
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