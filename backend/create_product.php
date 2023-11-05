<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name']) && isset($data['cost']) && isset($data['characteristocs']) && isset($data['category'])) {
        $name = $data['name'];
        $cost = $data['cost'];
        $characteristocs = $data['characteristocs'];
        $photo = $photo = isset($data['photo']) ? $data['photo'] : null;
        $category_name = $data['category'];

        $fetch_category = "SELECT * FROM categories where category_name = '$category_name'";
        $category_result = mysqli_query($mysqli, $fetch_category);
    
        if ($category_result) {
            $category_data = mysqli_fetch_assoc($category_result);
            if ($category_data) {
                $create_product = "INSERT INTO products (product_name, product_features, product_image, price, category_id)
                VALUES ('$name', '$characteristocs', " . ($photo ? "'$photo'" : 'NULL') . ", '$cost', '{$category_data['id']}');";
                $products_result = mysqli_query($mysqli, $create_product);
            
                if (!$products_result) {
                    die("Продукт не был создан");
                }
            } else {
                echo "Категория не найдена ";
            }
        } else {
            echo "Ошибка запроса: " . mysqli_error($mysqli);
        }
    }
    else {
        echo ("Непредвиденная ошибка ". mysqli_error($mysqli));
    }
?>