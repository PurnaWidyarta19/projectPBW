<?php
    include 'my_DB.php';
    
    session_start();
    if (!isset($_SESSION['email'])){
        header("Location: page-login.php");
    }

    try {
        $pdo = new PDO($dsn, $db_username, $db_password, $opt);
        $stmt = $pdo->prepare("SELECT SUBSTRING_INDEX(nama, ' ', 1) FROM `user_form` WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['id']);
        $stmt->execute();
        $first_name = $stmt->fetchColumn();
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header login</title>

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <div class="header-all">
        <nav>
            <div class="nav-left">
                <div class="follow">
                    <p>Ikuti kami di</p>
                </div>
                <div class="follow-list">
                    <a href="https://web.facebook.com/purna.wid/" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/purna_widyarta/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="bantuan">
                    <a href="#" onclick="toggleMenu()">Pusat Bantuan</a>
                    <div class="bantuan-list" id="pusatBantuan">
                        <a href="cara-pemesanan.php">Cara Pemesanan</a>
                        <a href="testimoni.php">Testimoni</a>
                    </div>
                </div>
                <a href="order.php" target="_blank">Pemesanan</a>
            </div>
            <div class="nav-spacer"></div>
            <div class="nav-right">
                <div class="menu-profil">
                    <div class="user-name">
                        <p>Hii! <?php echo $first_name;?></p>
                    </div>
                    <div class="user-icon">
                        <a href="#" onclick="toggleMenu1()"><i class="fa-solid fa-user"></i></a>
                    </div>
                    <div class="sub-menu" id="userProfil">
                        <a href="user-profil.php" id="profile"><i class="fa-solid fa-user"></i>Profil Saya</a>
                        <a href="pesanan_saya.php"><i class="fa-solid fa-receipt"></i>Pesanan Saya</a>
                        <a href="db_logout.php"><i class="fas fa-angle-right"></i>Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="header-containsrc-chart">
            <div class="gp" onclick="location.href='home-login.php'">
                <a href="home-login.php">
                    <div id="gp-img">
                        <img src="image/1-goprints-fix.png" alt="">
                    </div>
                </a>
            </div>
            <div class="kategori-icon">
                <a id="kategori"><i class="fa-sharp fa-light fa-grid-2" onclick="toggleMenu2()">Kategori</i></a>
                <div class="kategori-list" id="kategoriMenu">
                    <a href="see-more-login.php">All Product</a>
                    <a href="order.php">Pemesanan</a>
                </div>
            </div>
            <div class="src-box">
                <form action="" method="post">
                    <input type="text" id="keyword" name="keyword" class="serach-input" placeholder="Cari alat....">
                    <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <?php        
            $email = $_SESSION['email'];
            $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user_row = $result->fetch_assoc();
            $user_id = $user_row['id'];

            $select_rows = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = $user_id") or die("query failed");
            $row_count = mysqli_num_rows($select_rows);
            ?>

            <div id="cart-icon" onclick="windows.location.href='ur_cart.php'">
                <i class="fa-solid fa-cart-shopping cart-icon"></i>
                <a href="ur_cart.php"><span><?php echo $row_count ?></span></a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/toggle.js"></script>
    
</body>
</html>