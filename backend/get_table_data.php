<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");

    $fetch_category = "SELECT * FROM categories where category_name = '$category'";
    $category_result = mysqli_query($mysqli, $fetch_category);

    if ($category_result) {
        $category_data = mysqli_fetch_assoc($category_result);
        if ($category_data) {
            $fetch_products = "SELECT * FROM products where category_id = '{$category_data['id']}'";
            $products_result = mysqli_query($mysqli, $fetch_products);
        
            if (!$products_result) {
                die("Продукты не найдены");
            }

            while ($row = mysqli_fetch_assoc($products_result)) {
                ?>
                    <tr class="clicable"  data-href='/product?id=<?=$row['id']?>'>
                        <td class="table_cell">
                            <img class="table_image" src='<?= $row['product_image'] ?? '/backend/images/no_product.jpg' ?>' />
                        </td>
                        <td class="table_cell"><?= $row['product_name'] ?></td>
                        <td class="table_cell"><?= $row['product_features'] ?></td>
                        <td class="table_cell"><?= $row['price'] ?></td>
                    </tr>
                <?php
            }
        } else {
            echo "Категория не найдена ";
        }
    } else {
        echo "Ошибка запроса: " . mysqli_error($mysqli);
    }
?>