<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link rel="stylesheet" type="text/css" href="css/update_product.css">

    <!-- Import Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

    <?php
        include 'assets/admin_header.php';
    ?>

    <section class="update-product">
    <?php
        $update_id = $_GET['id'];
        //mengambil data dari db_update_product.php
        require 'db_update_product.php';

        $select_products = $conn->prepare("SELECT * FROM products WHERE id = ?");
        $select_products->bind_param('i', $update_id); // Bind the parameter
        $select_products->execute();
        $result = $select_products->get_result();
        
        $row_count = $select_products->num_rows;
        
        if ($result->num_rows > 0) {
            while ($fetch_products = $result->fetch_assoc()) {  
                // Display the product details
                echo '<form action="db_update_product.php" method="post" enctype="multipart/form-data">';

                echo '<div class="container">';
                echo '<h1 class="title">Update Product</h1>';
                echo '<p class="subtitle">Silakan isi form dibawah untuk memperbaharui produk anda.</p>';
                echo '<hr/>';
                
                echo '<div class="before">';
                echo '<input type="hidden" name="id" value="' . $fetch_products['id'] . '">';
                echo '<input type="hidden" name="old_image_01" value="' . $fetch_products['image_01'] . '">';
                echo '</div>';
                
                echo '<div class="image-container">';
                echo '<div class="main-image">';
                echo '<img src="uploadImage/' . $fetch_products['image_01'] . '" alt="">';
                echo '</div>';
                echo '</div>';
                
                echo '<table>';
                echo '<tr>';
                echo '<td class="ikon"><i class="fa-solid fa-tags"></i></td>';
                echo '<td><label for="name"><b>Update nama: </b></label></td>';
                echo '<td class="kotak"><input type="text" name="name" id="name" required class="box" placeholder="Masukkan nama produk" value="' . $fetch_products['name'] . '" ></td>';
                echo '</tr>';
                
                echo '<tr>';
                echo '<td class="ikon"><i class="fa-solid fa-dice-six"></i></td>';
                echo '<td><label for="details"><b>Update detail: </b></label></td>';
                echo '<td class="kotak"><input type="text" name="details" required class="box" maxlength="100" placeholder="Masukkan detail produk" value="' . $fetch_products['details'] . '"></td>';
                echo '</tr>';

                echo '<tr>';
                echo '<td class="ikon"><i class="fa-solid fa-dice-six"></i></td>';
                echo '<td><label for="delprice"><b>Update del-price: </b></label></td>';
                echo '<td class="kotak"><input type="number" name="delprice" class="box" min="0" max="9999999999" placeholder="enter product price" onkeypress="if(this.value.length == 10) return false;" value="' . $fetch_products['delprice'] . '"></td>';
                echo '</tr>';
                
                echo '<tr>';
                echo '<td class="ikon"><i class="fa-solid fa-dice-six"></i></td>';
                echo '<td><label for="price"><b>Update price: </b></label></td>';
                echo '<td class="kotak"><input type="number" name="price" required class="box" min="0" max="9999999999" placeholder="enter product price" onkeypress="if(this.value.length == 10) return false;" value="' . $fetch_products['price'] . '"></td>';
                echo '</tr>';
                
                echo '<tr>';
                echo '<td class="ikon"><i class="fa-solid fa-id-badge"></i></td>';
                echo '<td><label for="image_01"><b>Update gambar: </b></label><br /></td>';
                echo '<td><input type="file" id="image_01" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp"/></td>';
                echo '</tr>';
                
                echo '</table>';

                echo '<div class="tombol">';
                echo '<div id="back"><a href="daftar_product.php" class="option-btn">Go Back</a></div>';
                echo '<div id="update"><button type="submit" value="update" name="update" class="update-btn">Update</button></div>';
                echo '</div>';
                echo '</div>';

                echo '</form>';
            }
        }           
    ?>
    </section>

</body>
</html>