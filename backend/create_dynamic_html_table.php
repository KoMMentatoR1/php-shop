<?php
    require_once("db_connection.php");

    $dropTableSQL = "DROP TABLE IF EXISTS dynamic_html";
    if ($mysqli->query($dropTableSQL) === TRUE) {
        echo "Таблица 'dynamic_html' удалена, если существовала.<br>";
    } else {
        echo "Ошибка при удалении таблицы: " . $mysqli->error . "<br>";
    }

    $createTableSQL = "CREATE TABLE dynamic_html (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        content TEXT NOT NULL
    );";

    if ($mysqli->query($createTableSQL) === TRUE) {
        echo "Таблица 'dynamic_html' успешно создана.<br>";
    } else {
        echo "Ошибка при создании таблицы: " . $mysqli->error . "<br>";
    }
?>