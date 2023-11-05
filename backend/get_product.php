<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");

    $fetch_product = "SELECT * FROM products where id = '$product_id'";
    $product_result = mysqli_query($mysqli, $fetch_product);

    if ($product_result) {
        $product_data = mysqli_fetch_assoc($product_result);
        if ($product_data) {
            ?>
                <h2 class="content_header">
                    <button class="back_button">Назад</button>
                    <?= $product_data['product_name'] ?>
                </h2>
                <div class="product">
                    <div class="product_image">
                        <img class="image" src='<?= $product_data['product_image'] ?? '/backend/images/no_product.jpg' ?>' />
                    </div>
                    <div class="product_info">
                        <p>
                            <span class="info_title">Характеристики:</span>
                            <?= $product_data['product_features'] ?>
                        </p>
                        <p>
                            <span class="info_title">Цена:</span>    
                            <?= $product_data['price'] ?>
                        </p>
                    </div>
                </div>
            <?php
        } else {
            echo "Продукт не найден";
        }
    } else {
        echo "Ошибка запроса: " . mysqli_error($mysqli);
    }
?>