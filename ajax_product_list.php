<?php
    include 'assets/my_DB.php';

    try {
        $list = isset($_GET['product_name']) ? $_GET['product_name'] : '';

        $query = "SELECT * FROM products WHERE name LIKE '%$list%'";
        $result = $conn->query($query);
      
        if ($result) {
          // Return only the product names
          while ($row = mysqli_fetch_assoc($result)) {
            $product_name = $row['name'];
            echo '<li onclick="setSuggestion(\'' . $product_name . '\')">' . $product_name . '</li>';
          }
      
          // Free the result set
          mysqli_free_result($result);
        } else {
          // Handle the case when the query fails
          echo "Query failed: " . $conn->error;
        }
    } catch (PDOException $e) {
        exit("PDO Error: " . $e->getMessage() . "<br>");
    }
?>