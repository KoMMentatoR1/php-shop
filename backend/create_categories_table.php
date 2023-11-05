<?php
    require_once("db_connection.php");

    $disableForeignKeySQL = "SET FOREIGN_KEY_CHECKS=0";
    $mysqli->query($disableForeignKeySQL);

    $dropTableSQL = "DROP TABLE IF EXISTS categories";
    if ($mysqli->query($dropTableSQL) === TRUE) {
        echo "Таблица 'categories' удалена, если существовала.<br>";
    } else {
        echo "Ошибка при удалении таблицы: " . $mysqli->error . "<br>";
    }

    $createTableSQL = "CREATE TABLE categories (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        category_name VARCHAR(50) NOT NULL
    )";

    if ($mysqli->query($createTableSQL) === TRUE) {
        echo "Таблица 'categories' успешно создана.<br>";
    } else {
        echo "Ошибка при создании таблицы: " . $mysqli->error . "<br>";
    }
?>