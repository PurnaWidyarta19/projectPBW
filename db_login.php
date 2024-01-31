<?php
    include 'assets/my_DB.php';
          
    session_start();
    try {
        $dbh = new PDO($dsn,$db_username,$db_password,$opt);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Koneksi database gagal: " . $e->getMessage();
        exit;
    }
    
    // Memeriksa apakah form login telah disubmit
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
    
        // Menjalankan query untuk memeriksa keberadaan pengguna dengan username dan password yang cocok
        $query = "SELECT * FROM user_form WHERE email = :email AND password = :password";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $result = $stmt->fetch();  // Fetch hasil menjadi associative array
        
        // Memeriksa apakah pengguna ditemukan
        if ($stmt->rowCount() > 0) {
            $id = $result['id']; 
            
            if ($email === "admin19@gmail.com" && md5("111") === $password) {
                // Jika login berhasil, maka akan beralih ke tampilan admin
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $result['nama']; 
                $_SESSION['id'] = $id;
    
                // Redirect ke halaman admin setelah login berhasil
                header('Location: dashboard.php');
                exit();
            } else {
                // Jika login berhasil, maka akan beralih ke tampilan user
                $_SESSION['admin_logged_in'] = false;
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $result['nama']; 
                $_SESSION['id'] = $id;
        
                // Redirect ke halaman admin setelah login berhasil
                header('Location: home-login.php');
                exit(); 
            }
        
        } else {
            // Pengguna tidak ditemukan atau password salah
            $pesan = "Email atau Password salah !!!";
            echo "<script>alert('$pesan');</script>";
            header('Location: page-login.php');
            exit();
        }
    }
?>
