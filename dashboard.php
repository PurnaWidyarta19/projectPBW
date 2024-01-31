<?php
    include 'assets/my_DB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="assets/admin_header.css">
</head>
<body>
    <?php
        include 'assets/admin_header.php';
    ?>
    <form action="db_dashboard.php" enctype="multipart/form-data" method="POST" onsubmit="validate()">
        <div class=" container">
            <h1>Add Product</h1>
            <p>Silakan isi form dibawah untuk menambah produk anda.</p>
            <hr/>
            <table>
                <tr>
                    <td class="ikon"><i class="fa-solid fa-tags"></i></td>
                    <td><label for="name"><b>Nama Produk: </b></label></td>
                    <td class="kotak"><input type="text" placeholder="Masukkan nama produk" name="name" id="name" required /></td>
                </tr>

                <tr>
                    <td class="ikon"><i class="fa-solid fa-dice-six"></i></td>
                    <td><label for="details"><b>Keterangan Produk: </b></label></td>
                    <td class="kotak"><input type="text" placeholder="Masukkan keterangan" name="details" id="details" required /></td>
                </tr>

                <tr>
                    <td class="ikon"><i class="fa-solid fa-dice-six"></i></td>
                    <td><label for="delprice"><b>Del-Price: </b></label></td>
                    <td class="kotak"><input type="text" placeholder="Masukkan keterangan" name="delprice" id="delprice"/></td>
                </tr>

                <tr>
                    <td class="ikon"><i class="fa-solid fa-dice-six"></i></td>
                    <td><label for="price"><b>Price: </b></label></td>
                    <td class="kotak"><input type="text" placeholder="Masukkan keterangan" name="price" id="price" required /></td>
                </tr>

                <tr>
                    <td class="ikon"><i class="fa-solid fa-id-badge"></i></td>
                    <td><label for="image_01"><b>Foto Barang:</b></label><br /></td>
                    <td><input type="file" id="image_01" name="image_01"/></td>
                </tr>

                <tr>
                    <td id="upload"><button type="submit" name="upload">Submit</button></td>
                </tr>
            </table>
        </div>
    </form>    
</body>
</html>