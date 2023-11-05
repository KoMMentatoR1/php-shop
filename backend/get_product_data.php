<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");

    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id = $product_id;";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $product = mysqli_fetch_assoc($result);
                header('Content-Type: application/json');
                echo json_encode($product);
            } else {
                echo "Product not found";
            }
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    } else {
        echo "Product ID not provided in the request";
    }
?>