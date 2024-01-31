<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni | Goprints</title>
    <link rel="stylesheet" href="css/testimoni.css">
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

        if (isset($_SESSION['message'])) {
            echo '<script>';
            echo 'let messageType = "' . $_SESSION['message_type'] . '";'; 
            echo 'let message = "' . $_SESSION['message'] . '";'; 
            echo 'alert(message);'; 
            echo '</script>';

            unset($_SESSION['message']); 
            unset($_SESSION['message_type']); 
        } 

        $email = $_SESSION['email'];
        $stmt = $conn->prepare("SELECT id, nama FROM user_form WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user_row = $result->fetch_assoc();
        $user_id = $user_row['id'];
        $user_name = $user_row['nama'];


    ?>

    <div class="section">
        <div class="table">
            <form action="db_testimoni.php" method="post">
                <div class="header">
                    <h2>Review Belanja dan Pemesanan di Goprints</h2>
                </div>
                <div class="box-in">
                    <div class="input-box">
                        <input type="hidden" id="number" name="number"required>
                    </div>
                    <div class="input-box">
                        <input type="text" id="username" name="username" value="<?php echo $user_name ?>" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="input-box">
                        <input type="text" id="product_name" name="product_name" placeholder="kosongkan jika membeli barang">
                        <label for="product_name">Nama Produk</label>
                        <?php 
                            if(isset($_POST['product_name'])){
                                require 'ajax_product_list.php';
                            }
                        ?>
                        <div id="product_list">
                            <ul name="list" id="list">
                            </ul>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="text" id="pemesanan" name="pemesanan" placeholder="kosongkan jika tidak memesan">
                        <label for="pemesanan">Pemesanan</label>
                    </div>
                    <div class="input-box">
                        <textarea id="review" name="review" rows="4" cols="50" class="review" required></textarea>
                        <label for="review" class="review">Review</label>
                    </div>
                    <div class="review_btn" >
                        <input type="submit" value="Send Review" name="review_btn">
                    </div>
                </div>   
            </form>
        </div>
        <div class="isi">      
            <table>
                <thead>
                    <tr>
                        <th class="beda" style="text-align: center">No <span class="icon-arrow">&UpArrow;</span></th>
                        <th class="username">Username <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Nama Barang <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Pemesanan <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Review <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $select_testimoni = mysqli_query($conn, "SELECT * FROM testimoni");
                        $review_number = 1;

                        if(mysqli_num_rows($select_testimoni) > 0){
                            while ($fetch_testi = mysqli_fetch_assoc($select_testimoni)){
                        ?>  
                            <tr>
                                <td class="no"><?php echo $review_number; ?></td>
                                <td><?php echo $fetch_testi['username']; ?></td>
                                <td><?php echo $fetch_testi['nama_barang']; ?></td>
                                <td><?php echo $fetch_testi['pemesanan']; ?></td>
                                <td><?php echo $fetch_testi['review']; ?></td>
                            </tr>
                    <?php
                            $review_number++;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="js/suggestion_testimoni.js"></script>

    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>