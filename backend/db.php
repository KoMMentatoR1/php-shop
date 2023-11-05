<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Создания таблиц
    require_once("create_categories_table.php");

    require_once("create_products_table.php");

    require_once("create_user_table.php");
    
    require_once("create_dynamic_html_table.php");

    // Миграции

    require_once("migraions.php");
?>