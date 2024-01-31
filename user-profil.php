<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil saya</title>

    <link rel="stylesheet" href="css/user-profil.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">
    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <?php
        include 'assets/navbar_login.php';
    ?>

    <div class="profile">
        <div class="profile-picture">
            <img src="image/login.png" alt="User Picture">
        </div>
        <?php
            $email = $_SESSION['email'];
            $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user_row = $result->fetch_assoc();
            $user_id = $user_row['id'];

            $select_profil = mysqli_query($conn, "SELECT * FROM user_form WHERE id = $user_id");
            if (mysqli_num_rows($select_profil) > 0) {
                while ($fetch_profil = mysqli_fetch_assoc($select_profil)) {
                    ?>
                        <div class="profile-info">
                            <h2 class="profile-name"><?php echo $fetch_profil['nama']; ?></h2>
                            <p class="profile-email"><?php echo $fetch_profil['email']; ?></p>
                            <p class="profile-tlpn"><?php echo $fetch_profil['telp']; ?></p>
                        </div>
                    <?php
                }
            } 
        ?>
    </div>

    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>