<?php 
    include 'assets/my_DB.php';

    if(isset($_POST['upload'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $details = mysqli_real_escape_string($conn, $_POST['details']);
        $delprice = mysqli_real_escape_string($conn, $_POST['delprice']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $image = $_FILES['image_01'];
        $img_loc = mysqli_real_escape_string($conn, $_FILES['image_01']['name']);
        $img_name = $_FILES['image_01']['tmp_name'];
        $img_des = "uploadImage/".$img_loc;
        

        // insert data
        $insert_query = mysqli_query($conn,"INSERT INTO products (name, details, delprice, price, image_01) VALUES ('$name','$details','$delprice','$price','$img_loc')");
        
        if($insert_query){
            move_uploaded_file($img_name, $img_des);
            $pesan[] = 'produk berhasil ditambahkan';
            header("Location: daftar_product.php");
        }else{
            $pesan[] = 'gagal menambahkan produk';
        }
    };
?>
