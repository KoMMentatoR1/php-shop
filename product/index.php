<!DOCTYPE html>
<?php include 'C:\MAMP\htdocs\shared\ui\head.phtml' ?>
<html>
    <body>
        <?php include 'C:\MAMP\htdocs\shared\ui\header.phtml' ?>
        <div class="contant_container">
            <?php include 'C:\MAMP\htdocs\shared\ui\sidebar.phtml' ?>
            <div class="contant">
                <?php
                    $product_id = $_GET['id'];

                    if (isset($product_id)) {
                        $product_id;
                        include 'C:\MAMP\htdocs\backend\get_product.php';
                    } else {
                        echo "Параметр 'id' не был передан в URL";
                    }
                ?>
                <?php
                    if (isset($_SESSION['username'])) {
                        $href = "/admin/update?id=" . $product_id;
                        include 'C:\MAMP\htdocs\shared\ui\editButton.phtml';
                    }
                ?>
                <?php
                    include 'C:\MAMP\htdocs\shared\ui\delete_button.phtml';
                ?>
            <div>       
        </div>   
        <?php include 'C:\MAMP\htdocs\shared\ui\footer.phtml' ?>
    </body>
    <script>
        const backButton = document.querySelector('.back_button')
        if(backButton) {
            backButton.onclick = () => window.history.back()
        }
    </script>    
</html>