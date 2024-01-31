<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Goprints</title>
    
    <link rel="stylesheet" href="css/page-login.css">
    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

    <script type="text/javascript" src="js/page-login.js"></script>
</head>
<body>
    <nav>
        <div class="left">
            <div class="header-containsrc-chart">
                <div class="gp" onclick="location.href='index.php'">
                    <a href="#">
                        <div id="gp-img">
                            <img src="image/1-goprints-fix.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <p class="follow">Ikuti kami di</p>
            <div class="follow-list">
                <a href="https://web.facebook.com/purna.wid/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/purna_widyarta/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
    </nav>

    <div class="section">
        <div class="box-out">
            <div class="box-in">
                <form action="db_login.php" method="post">
                    <h2>Login</h2>
                    <div class="input-box">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="lupa">
                        <a href="#">Lupa Password?</a>
                    </div>
                    <button onclick="location.href='home-login.php'" name="login">Log in</button>
                    <div class="register">
                        <p>Don't have account <a href="page-daftar.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>