<!DOCTYPE html>
<?php include 'C:\MAMP\htdocs\shared\ui\head.phtml' ?>
<html>
    <body>
        <?php include 'C:\MAMP\htdocs\shared\ui\header.phtml' ?>
        <div class="contant_container">
            <?php include 'C:\MAMP\htdocs\shared\ui\sidebar.phtml' ?>
            <div class="contant">
                <?php
                    $name = "Камеры";
                    include 'C:\MAMP\htdocs\shared\ui\product_contant.phtml'
                ?>
                <?php
                    if (isset($_SESSION['username'])) {
                        $name = "Камеры";
                        include 'C:\MAMP\htdocs\shared\ui\addButton.phtml';
                    }
                ?>
            <div>       
        </div>   
        <?php include 'C:\MAMP\htdocs\shared\ui\footer.phtml' ?>
    </body>    
</html>