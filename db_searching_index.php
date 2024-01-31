<?php
    include 'assets/my_DB.php';
    
    try{
        $search = $_GET['keyword'];
        
        $query = "SELECT * FROM products WHERE name LIKE '%$search%' ORDER BY id DESC LIMIT 4";
        $result = $conn->query($query);
        
        if ($result) {
        
            // Fetch the results
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <form action="db_add_to_cart.php" method="POST">
                        <div class="box">
                            <div class="box-img">
                                <img class="product-img" name="product-img" src="uploadImage/' . $row['image_01'] . '" alt="">
                            </div>
                            <div class="box-text">
                                <h3 class="product-title" name="product-name">' . $row['name'] . '</h3>
                                <div class="price-ikon">
                                    <div class="input-beda">
                                        <del class="delprice" name="delprice">' . $row['delprice'] . '</del>
                                        <p class="price" name="product-price">Rp ' . $row['price'] . '</p>
                                    </div>
                                    <div class="icon" onclick="window.location.href="page-login.php"">
                                        <i class="fa-solid fa-cart-shopping add-cart"></i>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                ';
            }
        
            // Free the result set
            mysqli_free_result($result);
        } else {
            // Handle the case when the query fails
            echo "Query failed: " . $conn->error;
        }
        
    }
    catch (PDOException $e) {
        exit("PDO Error: ".$e->getMessage()."<br>");
    }
?>