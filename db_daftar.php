<?php
    include 'assets/my_DB.php';
          
    try {
        // var_dump($_POST);
        $nama = $_POST['fname'] ." ". $_POST["lname"];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $pass = MD5($_POST['password']);

        $pdo = new PDO($dsn,$db_username,$db_password,$opt);
        $sql = "INSERT INTO user_form (nama, telp, email, password) VALUES ('$nama', '$telp', '$email', '$pass')";
        $pdo->exec($sql);
        $pdo = NULL;
        header("Location: page-login.php");
        exit;
    }
    catch (PDOException $e) {
        exit("PDO Error: ".$e->getMessage()."<br>");
    }
?>