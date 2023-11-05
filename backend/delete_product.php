<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");

    $product_id = $_GET['id'];

    if (isset($product_id)) {
        $delete_product = "DELETE FROM products WHERE id = $product_id;";
        
        $products_delete_result = mysqli_query($mysqli, $delete_product);
    
        if (!$products_delete_result) {
            die("Продукт не был удален: " . mysqli_error($mysqli));
        } else {
            header("Location: ../index.php");
        }
    } else {
        echo "Непредвиденная ошибка " . mysqli_error($mysqli);
    }
?>