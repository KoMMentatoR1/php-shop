<?php
    header('Content-Type: text/html');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['content']) && isset($data['name'])) {
        $content = $data['content'];
        $name = $data['name'];

        $fetch_content = "UPDATE dynamic_html SET content = '$content' where name = '$name'";
        $content_result = mysqli_query($mysqli, $fetch_content);

        if ($content_result) {
            $rows_updated = mysqli_affected_rows($mysqli);
    
            if ($rows_updated > 0) {
                echo "Запись обновлена успешно.";
            } else {
                echo "Нет записей для обновления.";
            }
        } else {
            echo "Ошибка запроса: " . mysqli_error($mysqli);
        }
    }    
    else {
        echo ("Непредвиденная ошибка ". mysqli_error($mysqli));
    }
?>