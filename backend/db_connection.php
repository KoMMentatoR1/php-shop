<?php
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "shop";

    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Ошибка подключения: " . $mysqli->connect_error);
    }
?>