<?php
    include 'assets/my_DB.php';
    include 'assets/navbar_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temukan disini! | Goprints</title>
    <link rel="stylesheet" href="css/see-more-login.css">
    <link rel="stylesheet" href="assets/navbar_login.css">
    <link rel="stylesheet" href="assets/footer_login.css">

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <main>

        <?php 
            if(isset($_POST['cari'])){
                require 'db_searching_all.php';
            }
        ?>

        <div class="main-title">
            <h3>All Products</h3>
        </div>
        <div class="big-box">
            <div class="card-row">
                <div id="searchproduct">
                    <?php
                        $select_product = mysqli_query($conn, "SELECT * FROM products");
                        if(mysqli_num_rows($select_product) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_product)){
                    ?>

                    <form action="db_add_to_cart.php" method="POST">
                        <div class="box">
                            <div class="box-img">
                                <img class="product-img" name="product-img" src="uploadImage/<?php echo $fetch_product['image_01']; ?>" alt="">
                            </div>
                            <div class="box-text">
                                <h3 class="product-title" name="product-name"><?php echo $fetch_product['name'];?></h3>
                                <div class="price-ikon">
                                    <div class="input-beda">
                                        <?php if (!empty($fetch_product['delprice'])) { ?>
                                        <del class="delprice" name="delprice"><?php echo $fetch_product['delprice'];?></del>
                                        <?php } ?>
                                        <p class="price" name="product-price">Rp <?php echo $fetch_product['price'];?></p>
                                    </div>
                                    <div class="icon">
                                        <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                        <input type="hidden" name="product-name" value="<?php echo $fetch_product['name']; ?>">
                                        <input type="hidden" name="product-price" value="<?php echo $fetch_product['price']; ?>">
                                        <input type="hidden" name="product-img" value="<?php echo $fetch_product['image_01']; ?>">
                                        <button type="submit" name="add_to_cart" class="add-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                    <?php
                            };
                        };
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="js/liveSearch_all.js"></script>

    <?php
        include 'assets/footer_login.php';
    ?>
</body>
</html>