<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header admin</title>
    <link rel="stylesheet" type="text/css" href="assets/admin_header.css">
    
    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
<header>
        <nav>
            <div class="logo">
                <a href="#"><img src="image/1-goprints-fix.png" alt=""></a>
            </div>
            <ul class="navmenu">
                <li><a href="#">Home</a></li>
                <li><a href="dashboard.php">Tambah Produk</a></li>
                <li><a href="daftar_product.php">Lihat Produk</a></li>
            </ul>
            <div class="akun" onclick="location.href='page-login.php'">
                <i class="fa-solid fa-right-from-bracket"> Logout</i>
            </div>
            <div class="menu-toggle">&#9776;</div>
        </nav>
    </header>

    <script src="js/admheader.js"></script>
</body>
</html>