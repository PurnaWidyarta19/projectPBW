<?php
    include 'assets/my_DB.php';

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_product_image = $conn->prepare("SELECT * FROM products WHERE name = ?");
        $delete_product_image->bind_param('s', $delete_id);
        $delete_product_image->execute();
        $fetch_delete_image = $delete_product_image->fetch();
        unlink('uploadImage/'.$fetch_delete_image['image_01']);
        $delete_product = $conn->prepare("DELETE FROM products WHERE id = ?");
        $delete_product->bind_param('s', $delete_id);
        $delete_product->execute();
        header('location: daftar_product.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang Admin</title>
    <link rel="stylesheet" type="text/css" href="css/daftar_products.css">
    <link rel="stylesheet" type="text/css" href="assets/admin_header.css">

</head>
<body>
    <?php
        include 'assets/admin_header.php'
    ?>
    <section class="show-products">
        <div class="box-container">
            <?php
                $show_products = $conn->prepare("SELECT * FROM products");
                $show_products->execute();
                $result = $show_products->get_result();

                if ($result->num_rows > 0) {
                    while ($fetch_products = $result->fetch_assoc()) {
                        ?>
                        <div class="box">
                            <div class="box-img">
                                <img src="uploadImage/<?= $fetch_products['image_01']; ?>" alt="">
                            </div>
                            <div class="box-text">
                                <div class="product-title"><?= $fetch_products['name']; ?></div>
                                <div class="price-ikon">
                                    <div class="input-beda">
                                        <del class="delprice"><? $fetch_products['delprice']; ?></del>
                                        <div class="price">Rp <?= $fetch_products['price']; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-btn">
                                <a href="update_product.php?id=<?= $fetch_products['id']; ?>" class="option-btn">Update</a>
                                <a href="daftar_product.php?delete=<?= $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">Delete</a>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    echo '<p class="empty">no products added yet</p>';
                }
            ?>
        </div>
    </section>
</body>
</html>