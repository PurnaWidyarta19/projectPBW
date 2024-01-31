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
    <title>New Arrivals | Goprints</title>
    <link rel="stylesheet" href="off-sale-login.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <main>
        <div class="main-title">
            <h3>Off Sale</h3>
        </div>
        <div class="big-box">
            <div class="card-row">
                <div class="box" onclick="location.href='page-detail.php'">
                    <div class="box-img">
                        <img src="image/1-fabercastel-10's.jpg" alt="">
                    </div>
                    <div class="box-text">
                        <h3>Faber Castell Connector Pens 10'S</h3>
                        <div class="price-ikon">
                            <div class="input-beda">
                                <del>Rp. 26.900</del>
                                <p class="price">Rp 20.000</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-cart-shopping" id="add-cart" onclick="window.location.href='page-login.php'"></i>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="box" onclick="location.href='page-detail-2.php'">
                    <div class="box-img">
                        <img src="image/1-kenko-75x75.jpg" alt="">
                    </div>
                    <div class="box-text">
                        <h3>Kenko Sticky Notes SN-0303 75x75mm</h3>
                        <div class="price-ikon">
                            <div class="input-beda">
                                <del>Rp. 9.900</del>
                                <p class="price">Rp 5.000</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-cart-shopping" id ="add-cart" onclick="window.location.href='page-login.php'"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box" onclick="location.href='page-detail-3.php'">
                    <div class="box-img">
                        <img src="image/1-penghapus-roti-fix.jpeg" alt="" class="beda">
                    </div>
                    <div class="box-text">
                        <h3>1 Set Penghapus Bentuk Roti Tawar</h3>
                        <div class="price-ikon">
                            <div class="input-beda">
                                <del>Rp. 13.000</del>
                                <p class="price">Rp 7.500</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-cart-shopping" id="add-cart" onclick="window.location.href='page-login.php'"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>   
    
    <?php
        include 'assets/footer_login.php';
    ?>

</body>
</html>