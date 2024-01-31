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
    <title>1 Set Penghapus Bentuk Roti Tawar| Goprints</title>
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
                <img src="image/1-penghapus-roti-fix.jpeg" alt="" class="gambar-utama">
            </div>
            <div class="sub-img">
                <img src="image/1-penghapus-roti-fix.jpeg" alt="" class="gambar-1">
                <img src="image/1-penghapus-roti-fix.jpeg" alt="" class="gambar-2">
                <img src="image/1-penghapus-roti-fix.jpeg" alt="" class="gambar-3">
            </div>
        </div>

        <div class="desc-order">
            <div class="box-text">
                <div class="header">
                    <h2>1 Set Penghapus Bentuk Roti Tawar</h2>
                    <hr>
                </div>
                <div class="price">
                    <del>Rp 13.000</del>
                    <h4>Rp 7.500</h4>
                </div>
                <div class="deskripsi">
                    <p id="desc">Deskripsi</p>
                    <p>penghapus bentuk roti tawar 1 set isi 4pcs</p>
                    <p>Dimensi kemasan : 7x4,5 cm</p>
                    <p>Dimensi produk :3,2x3 cm</p>   
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