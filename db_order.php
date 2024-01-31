<?php
    include 'assets/my_DB.php';
          
    try {
        // var_dump($_POST);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $kuantitas = $_POST['kuantitas'];
        $keterangan = $_POST['keterangan'];

        $jenis_hp = isset($_POST['jenis_hp'])? 1:0;
        $jenis_warna = isset($_POST['jenis_warna'])? 1:0;
        $jenis_laminating = isset($_POST['jenis_laminating'])? 1:0;
        $jenis_jilid = isset($_POST['jenis_jilid'])? 1:0;
        $jenis_fc = isset($_POST['jenis_fc'])? 1:0;
        $lainnya = isset($_POST['jenis_lain'])? $_POST['jenis_lain']: ' ';
        
        $metode = $_POST['metode'];

        $file = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
        $namafile = "image/".$file;
        move_uploaded_file($temp, $namafile);

        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        $sql = "INSERT INTO user_order (nama, email, telp, lainnya, keterangan, file,
                            p_hitamputih, p_warna, laminating, jilid, fc)
                 VALUES ('$nama', '$email', '$telp', '$lainnya', '$keterangan', '$namafile',
                            '$jenis_hp', '$jenis_warna','$jenis_laminating', '$jenis_jilid', '$jenis_fc')";
        $pdo->exec($sql);
        header('Location: order.php');
        $pdo = NULL;
        exit;
    }
    catch (PDOException $e) {
        exit("PDO Error: ".$e->getMessage()."<br>");
        header('Location: order.php');
    }
?>