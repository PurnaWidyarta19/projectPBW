<?php
    include 'my_DB.php';
    include 'assets/navbar_index.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan | Goprints</title>
    <link rel="stylesheet" href="css/cara-pemesanan.css">
    <link rel="stylesheet" href="assets/navbar_index.css">
    <link rel="stylesheet" href="assets/footer.css">

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <div class="main">
        <aside>
            <a href="cara-pemesanan.php">Cara Pemesanan</a>
            <a href="testimoni.php">Testimoni</a>
        </aside>
        <div class="text">
            <h3>Cara Pemesanan</h3>
            <p>Untuk memperjelas keterangan apa saja yang diperlukan untuk memesan di menu <a href="order.php">Order</a> ada beberapa hal 
                yang perlu diperjelas</p>
                <div class="text-angka">
                    <ol>
                        <li>Masukkan nama lengkap anda pada kotak <b>Nama Lengkap</b> seperti yan ada pada contoh</li>
                        <li>Masukkan email yang anda gunakan saat mendaftarkan akun di platform ini pada kotak <b>Email</b></li>
                        <li>Masukkan nomor telepon anda dengan format sesuai dengan contoh pada kotak <b>No Telepone</b></li>
                        <li>Pada bagian <b>Cetak</b> anda dapat memilih lebih dari 1 jenis, namun jika ada hal lain yang ingin
                        dilakukan, dapat anda isi pada kotak <b>lainnya</b></li>
                        <li>Masukkan <b>Metode Pembayaran</b> yang anda inginkan</li>
                        <li>Masukkan kuantitas yang anda inginkan</li>
                        <li>Tambahkan keterangan tambahan dengan detail pesanan yang anda harapkan.
                            Namun jika tidak ada, maka boleh dikosongkan.
                        </li>
                    </ol>
                </div>
            <p>Jika ada hal yang belum anda pahami anda dapat menghubungi kami melalui email: <a href="mailto:222112096@stis.ac.id">222112099@stis.ac.id</a></p>
        </div>
    </div>
    <?php
        include 'assets/footer.php';
    ?>
</body>
</html>