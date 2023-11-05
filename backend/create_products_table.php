<?php
    require_once("db_connection.php");

    $dropTableSQL = "DROP TABLE IF EXISTS products";
    if ($mysqli->query($dropTableSQL) === TRUE) {
        echo "Таблица 'products' удалена, если существовала.<br>";
    } else {
        echo "Ошибка при удалении таблицы: " . $mysqli->error . "<br>";
    }

    $createTableSQL = "CREATE TABLE products (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(255) NOT NULL,
        product_image VARCHAR(255),
        product_features TEXT,
        price DECIMAL(10, 2) NOT NULL,
        category_id INT(11) NOT NULL,
        FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
    );";

    if ($mysqli->query($createTableSQL) === TRUE) {
        echo "Таблица 'products' успешно создана.<br>";
    } else {
        echo "Ошибка при создании таблицы: " . $mysqli->error . "<br>";
    }
?>