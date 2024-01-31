<?php
        include 'assets/navbar_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order here! | Goprints</title>
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div class="section">
        <div class="box-out">
            <form action="db_order.php" method="post" enctype="multipart/form-data">
                <h2>Your Order</h2>
                <hr>
                <div class="box-in">
                    <div class="input-box">
                        <input type="text" id="nama-lengkap" name="nama" placeholder="Contoh: Sultan Handara" required>
                        <label for="nama-lengkap">Nama Lengkap</label>
                    </div>
                    <div class="input-box">
                        <input type="email" id="email" name="email" placeholder="Contoh: sultanhandara123@gmail.com" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="tel" id="telp" name="telp" placeholder="Contoh: 6285*********" required>
                        <label for="telepon">No Telepon</label>
                    </div>
                    <div class="input-jenis">
                        <span id="jenis">Cetak</span>
                        <div class="jenis-cetak">
                            <input type="checkbox" name="jenis_hp" id="print" value="print" class="kotak">Print Hitam-Putih<br>
                            <input type="checkbox" name="jenis_warna" id="printwarna" value="printwarna" class="kotak">Print Berwarna<br>
                            <input type="checkbox" name="jenis_laminating" id="laminating" value="laminating" class="kotak">Laminating<br>
                            <input type="checkbox" name="jenis_jilid" id="jilid" value="jilid" class="kotak">Jilid<br>
                            <input type="checkbox" name="jenis_fc" id="fc" value="fotocopy" class="kotak">Foto Copy<br>
                            <input type="text" name="jenis_lain" id="lainnya" class="lainnya" placeholder="Lainnya...">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="metode">Metode Pembayaran</label>
                        <select class="pembayaran" name="metode" id="metode">
                            <option value="Qris" name="metode">Qris</option>
                            <option value="OVO" name="metode">OVO</option>
                            <option value="Link_aja" name="metode">Link Aja</option>
                            <option value="DANA" name="metode">DANA</option>
                            <option value="Cash" name="metode">Cash/On the spot</option>
                        </select>
                    </div>
                    <div class="input-jenis">
                        <span id="qty">Kuantitas</span>
                        <div class="qty">
                            <input type="radio" name="kuantitas" id="1-kuantitas" value="1" class="kotak">1<br>
                            <input type="radio" name="kuantitas" id="2-kuantitas" value="2" class="kotak">2<br>
                            <input type="radio" name="kuantitas" id="3-kuantitas" value="3" class="kotak">3<br>
                            <input type="text" name="kuantitas" id="bnyk-kuantitas" placeholder=">3" class="lainnya"> 
                        </div>
                    </div>
                    <div class="input-file">
                        <label for="upload-file">Upload file</label>
                        <input type="file" name="file" id="file" >
                    </div>
                    <div class="input-keterangan">
                        <label for="keterangan">Keterangan Tambahan</label>
                        <input type="text" name="keterangan" id="keterangan" placeholder="Masukkan keterangan tambahan...">
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Order Now!">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>