<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Goprints</title>
    <link rel="stylesheet" href="css/page-daftar.css">

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <nav>
        <div class="left">
            <div class="header-containsrc-chart">
                <div class="gp" onclick="location.href='home.php'">
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
                <form action="db_daftar.php" method="post">
                    <h2>Daftar</h2>
                    <div class="input-box">
                        <input type="text" id="nama-depan" name="fname" placeholder="Masukkan nama depan" required>
                        <label for="nama-depan">Nama Depan</label>
                    </div>
                    <div class="input-box">
                        <input type="text" id="nama-belakang" name="lname" placeholder="Masukkan nama belakang" required>
                        <label for="nama-belakang">Nama Belakang</label>
                    </div>
                    <div class="input-box">
                        <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="tel" id="telp" name="telp" placeholder="Ex: 6285*********" required>
                        <label for="telepon">No Telepon</label>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="input-box">
                        <input type="password" id="konfirmasi" name="konfirmasi" placeholder="Konfirmasi password" required>
                        <label for="konfirmasi">Konfirmasi Password</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="" required>
                        <label for="accept" id="">Saya menyetujui <a href="page-syarat.php" target="_blank">Syarat & Ketentuan</a>
                            serta <a href="page-privasi.php" target="_blank">Kebijakan Privasi</a> Goprints.</label>
                    </div>

                    <div class="tombol">
                        <button onclick="validate()" name ="daftar" >Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>