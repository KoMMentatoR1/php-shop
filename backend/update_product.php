<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name']) && isset($data['cost']) && isset($data['characteristocs']) && isset($data['id'])) {
        $name = $data['name'];
        $cost = $data['cost'];
        $characteristocs = $data['characteristocs'];
        $photo = isset($data['photo']) ? $data['photo'] : null;
        $product_id = $data['id'];
    
        $update_product = "UPDATE products SET 
            product_name = '$name', 
            product_features = '$characteristocs', 
            product_image = " . ($photo ? "'$photo'" : 'NULL') . ", 
            price = '$cost'
            WHERE id = $product_id";
        
        $products_result = mysqli_query($mysqli, $update_product);
    
        if (!$products_result) {
            die("Продукт не был обновлен: " . mysqli_error($mysqli));
        } else {
            echo "Продукт успешно обновлен";
        }
    } else {
        echo "Непредвиденная ошибка " . mysqli_error($mysqli);
    }
?>