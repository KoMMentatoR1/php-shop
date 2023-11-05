<!DOCTYPE html>
<?php include 'C:\MAMP\htdocs\shared\ui\head.phtml' ?>
<html>
    <body>
        <?php include 'C:\MAMP\htdocs\shared\ui\header.phtml' ?>
        <div class="contant_container">
            <?php include 'C:\MAMP\htdocs\shared\ui\sidebar.phtml' ?>
            <div class="contant">
                <?php
                if (isset($_SESSION['username'])): ?>
                    <?php
                        if (isset($_GET['id'])):
                    ?>  
                        <?php include 'C:\MAMP\htdocs\shared\ui\update_product_form.phtml' ?>
                    <?php else: ?>
                        <h3>Параметр 'id' не был передан в URL</h3>
                    <?php endif; ?>
                <?php else: ?>
                    <h3>Эта страница вам не доступна</h3>
                <?php endif; ?>
            <div>       
        </div>   
        <?php include 'C:\MAMP\htdocs\shared\ui\footer.phtml' ?>
    </body>   
</html>