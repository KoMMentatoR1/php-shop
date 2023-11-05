<?php
    require_once("db_connection.php");

    $dropTableSQL = "DROP TABLE IF EXISTS users";
    if ($mysqli->query($dropTableSQL) === TRUE) {
        echo "Таблица 'users' удалена, если существовала.<br>";
    } else {
        echo "Ошибка при удалении таблицы: " . $mysqli->error . "<br>";
    }

    $createTableSQL = "CREATE TABLE users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    );";

    if ($mysqli->query($createTableSQL) === TRUE) {
        echo "Таблица 'users' успешно создана.<br>";
    } else {
        echo "Ошибка при создании таблицы: " . $mysqli->error . "<br>";
    }
?>