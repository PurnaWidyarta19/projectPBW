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
    <main>
        <div class="box-img">
            <div class="main-img">
                <img src="image/1-fabercastel-pensil-2b.jpg" alt="" class="gambar-utama">
            </div>
            <div class="sub-img">
                <img src="image/1-fabercastel-pensil-2b.jpg" alt="" class="gambar-1">
                <img src="image/1-fabercastel-pensil-2b.jpg" alt="" class="gambar-2">
                <img src="image/1-fabercastel-pensil-2b.jpg" alt="" class="gambar-3">
            </div>
        </div>

        <div class="desc-order">
            <div class="box-text">
                <div class="header">
                    <h2>Faber Castell Pensil 2B</h2>
                    <hr>
                </div>
                <div class="price">
                    <del></del>
                    <h4>Rp 13.100</h4>
                </div>
                <div class="deskripsi">
                    <p id="desc">Deskripsi</p>
                    <p>Pencil Castell adalah pensil hijau klasik yang selalu bisa diandalkan. 
                        Pensil pilihan seniman dunia yang memiliki pilihan 16 ketebalan yang 
                        berbeda, menjadikan karya seni yang indah. Selain itu pensil Castell 
                        9000 2B khusus dirancang untuk ujian karena menghasilkan arsiran 
                        gelap sempurna, tidak mudah patah sehingga tidak membuang-buang waktu 
                        untuk meraut. Tidak perlu lagi ragu jawabanmu tidak terdeteksi karena 
                        hasil arsirannya sudah terbukti lulus uji scanner OMR dan DMR.</p>
                    <p>Merk: Faber Castell</p>
                    <p>> Pensil 2B khusus untuk ujian nasional</p>
                    <p>> Lulus uji scanner OMR dan DMR</p>
                    <p>> Terdiri dari 16 ketebalan berbeda untuk menghasilkan karya seni yang luar biasa.</p>
                    <p>> Lulus uji scanner OMR dan DMR</p>
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