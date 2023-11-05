<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");

    $fetch_content = "SELECT * FROM dynamic_html where name = '$name'";
    $content_result = mysqli_query($mysqli, $fetch_content);

    if ($content_result) {
        $content_data = mysqli_fetch_assoc($content_result);
        if ($content_data) {
           echo $content_data['content'];
        } else {
            echo "Контент не найден";
        }
    } else {
        echo "Ошибка запроса: " . mysqli_error($mysqli);
    }
?>