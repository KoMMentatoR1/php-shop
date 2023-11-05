<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include("db_connection.php");
    session_start();

    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $fetch_user = "Select * from users where name = '$login' and password = '$password'";
        $user = mysqli_query($mysqli, $fetch_user);

        if($user) {
            if($user->num_rows == 1) {
                $user_data = mysqli_fetch_assoc($user);
                $_SESSION['username'] = $user_data['name'];
                header("Location: ../index.php");
            }
            else {
                header("Location: ../login?error=Неверное логин или пароль");
            }
        }
        else {
            echo ("Непредвиденная ошибка ". mysqli_error($mysqli));
        }
    }
    else {
        echo ("Непредвиденная ошибка ". mysqli_error($mysqli));
    }
?>